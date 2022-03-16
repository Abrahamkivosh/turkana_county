<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $pageConfigs = ['pageHeader' => true];
    $breadcrumbs = [
      ["link" => "/", "name" => "app"], ["name" => "Users"]
    ];
    $users = User::latest()->with('roles')->get();
    return view('pages\app-users-list', ['pageConfigs' => $pageConfigs, 'breadcrumbs' => $breadcrumbs, 'users' => $users]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $pageConfigs = ['pageHeader' => true];
    $breadcrumbs = [
      ["link" => "/", "name" => "app"],  ["link" => "/app/admin/users", "name" => "users view"], ["name" => "Users create"]
    ];
    $roles = Role::latest()->get();
    return view('pages.app-users-create', ['pageConfigs' => $pageConfigs, 'breadcrumbs' => $breadcrumbs, 'roles' => $roles]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \App\Http\Requests\StoreUserRequest  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StoreUserRequest $request)
  {


    $data = $request->validated();
    $data['password'] = Hash::make("password");

    $roleIds = $data["role"];

    $user = new User();

    $user["name"] = $data["name"];
    $user["email"] = $data['email'];
    $user["phone"] =  $data['phone'];
    $user["employee_no"] =  $data['employee_no'];
    $user["national_id"] = $data['national_id'];
    $user["password"] = $data['password'];

    $user->save();

    $user->assignRole($roleIds);

    return redirect()->route("users.index")->with("success", "User created successfully");
  }





  /**
   * Display the specified resource.
   *
   * @param  \App\Models\User  $user
   * @return \Illuminate\Http\Response
   */
  public function show(User $user)
  {
    $pageConfigs = ['pageHeader' => true];
    $breadcrumbs = [
      ["link" => "/", "name" => "app"], ["link" => "/app/admin/users", "name" => "users"], ["name" => "User view"]
    ];

    return view('pages.app-users-view', ['pageConfigs' => $pageConfigs, 'breadcrumbs' => $breadcrumbs, 'user' => $user]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\User  $user
   * @return \Illuminate\Http\Response
   */
  public function edit(User $user)
  {
    $pageConfigs = ['pageHeader' => true];
    $breadcrumbs = [
      ["link" => "/", "name" => "app"], ["link" => "/app/admin/users/", "name" => "users"], ["name" => "User Edit"]
    ];
    return view('pages.app-users-edit', ['pageConfigs' => $pageConfigs, 'breadcrumbs' => $breadcrumbs, 'user' => $user]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \App\Http\Requests\UpdateUserRequest  $request
   * @param  \App\Models\User  $user
   * @return \Illuminate\Http\Response
   */
  public function update(UpdateUserRequest $request, User $user)
  {
    $data = $request->validated() ;


    if (file_exists($request->file('image'))) {

      $old_avatar = $user->image;
      $avatar = $request->image;
      if ($old_avatar != 'avatar.png' &&  !Str::contains($avatar, 'http')) {
        $imagepath = public_path('/storage/user') . '/' . $old_avatar;

        File::delete($imagepath);
      }


      // Get filename with extension
      $filenameWithExt = $request->file('image')->getClientOriginalName();

      // Get just the filename
      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

      // Get extension
      $extension = $request->file('image')->getClientOriginalExtension();

      // Create new filename
      $filenameToStore =  time() . '.' . $extension;

      // Uplaod image
      $path = $request->file('image')->storeAs('public/user', $filenameToStore);

      // Upload image
      $user->image = $filenameToStore;
    }



    $user["name"] = $data["name"];
    $user["email"] = $data['email'];
    $user["phone"] =  $data['phone'];
    $user["employee_no"] =  $data['employee_no'];
    $user["national_id"] = $data['national_id'];
    $user->save();

    return back()->with("success","Updated user profilr") ;



  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\User  $user
   * @return \Illuminate\Http\Response
   */
  public function destroy(User $user)
  {
    //
  }
}
