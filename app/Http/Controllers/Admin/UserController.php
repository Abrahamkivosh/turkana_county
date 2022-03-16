<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

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
    return view('pages.app-users-create', ['pageConfigs' => $pageConfigs, 'breadcrumbs' => $breadcrumbs,'roles'=>$roles]);
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

   $roleIds =$data["role"] ;

    $user = new User();

    $user["name"] = $data["name"];
    $user["email"] = $data['email'];
    $user["phone"] =  $data['phone'];
    $user["employee_no"] =  $data['employee_no'];
    $user["national_id"] = $data['national_id'];
    $user["password"] = $data['password'];

    $user->save();

    $user->assignRole($roleIds) ;

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
    //
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
