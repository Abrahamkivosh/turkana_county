@extends('layouts.contentLayoutMaster')
{{-- page title --}}
@section('title','Users View')
{{-- page styles --}}
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/app-users.css')}}">
@endsection
@section('content')
<!-- users view start -->
<section class="users-view">
  <!-- users view media object start -->
  <div class="row">
    <div class="col-12 col-sm-7">
      <div class="media mb-2">
        <a class="mr-1" href="javascript:void(0);">
          <img src="{{asset('images/portrait/small/avatar-s-26.jpg')}}" alt="users view avatar"
            class="users-avatar-shadow rounded-circle" height="64" width="64">
        </a>
        <div class="media-body pt-25">
          <h4 class="media-heading"><span class="users-view-name">{{$user->name}}
          </span>
          {{-- <span
              class="text-muted font-medium-1"> @</span><span
              class="users-view-username text-muted font-medium-1 ">candy007</span> --}}
            </h4>
          <span>Employee No ::</span>
          <span class="users-view-id">{{$user->employee_no}}</span>
        </div>


      </div>
    </div>
    <div class="col-12 col-sm-5 px-0 d-flex justify-content-end align-items-center px-1 mb-2">
      <a href="mailto:{{$user->email}}" class="btn btn-sm mr-25 border"><i class="bx bx-envelope font-small-3"></i></a>

      <a href="{{route('users.show',$user)}}" class="btn btn-sm mr-25 border">Profile</a>
      <a href="{{route('users.edit',$user)}}" class="btn btn-sm btn-primary">Edit</a>
    </div>
  </div>
  <!-- users view media object ends -->
  <!-- users view card data start -->
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-12 col-md-4">
          <table class="table table-borderless">
            <tbody>
              <tr>
                <td>Registered:</td>
                <td>{{$user->created_at}}</td>
              </tr>
              <tr>
                <td>National Id:</td>
                <td class=""> {{ $user->national_id}} </td>
              </tr>
              <tr>
                <td>Phone:</td>
                <td class=""> {{ $user->phone}} </td>
              </tr>
              <tr>
                <td>Verified:</td>
                <td class="users-view-verified"> {{ $user->email_verified_at ? "YES": "NO" }} </td>
              </tr>

              <tr>
                <td>Status:</td>
                <td>
                  @if ($user->status == "active")
                  <span class="badge badge-light-success users-view-status">Active</span>
                  @else
                  <span class="badge badge-light-danger users-view-status">Banned</span>
                  @endif
                  </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="col-12 col-md-8">
          <table class="table table-light">
            <thead class="thead-light">
              <tr>
                <th>#</th>
                <th>Roles</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($user->roles as $key=> $role)
              <tr>
                <td> {{ ++$key}} </td>
                <td>{{$role->name}} </td>
              </tr>
              @endforeach

            </tbody>

          </table>

        </div>

      </div>
    </div>
  </div>
  <!-- users view card data ends -->
  <!-- users view card details start -->
  <div class="card">
    <div class="card-body">
      <div class="row bg-primary bg-lighten-5 rounded mb-2 mx-25 text-center text-lg-left">
        <div class="col-12 col-sm-4 p-2">
          <h6 class="text-primary mb-0">Requests: <span class="font-large-1 align-middle">125</span></h6>
        </div>
        <div class="col-12 col-sm-4 p-2">
          <h6 class="text-primary mb-0">Levels: <span class="font-large-1 align-middle">534</span></h6>
        </div>
        <div class="col-12 col-sm-4 p-2">
          <h6 class="text-primary mb-0">Messages: <span class="font-large-1 align-middle">256</span></h6>
        </div>
      </div>
      <div class="col-12">
        <table class="table table-borderless">
          <tbody>

            <tr>
              <td>Name:</td>
              <td class="users-view-name">{{$user->name}}</td>
            </tr>
            <tr>
              <td>E-mail:</td>
              <td class="users-view-email">{{$user->email}}</td>
            </tr>
            <tr>
              <td>Phone:</td>
              <td>{{$user->phone}}</td>
            </tr>

          </tbody>
        </table>

        <h5 class="mb-1"><i class="bx bx-info-circle"></i> Personal Info</h5>
        <table class="table table-borderless mb-0">
          <tbody>
            <tr>
              <td>Birthday:</td>
              <td>03/04/1990</td>
            </tr>
            <tr>
              <td>Country:</td>
              <td>Kenya</td>
            </tr>
            <tr>
              <td>Languages:</td>
              <td>English</td>
            </tr>
            <tr>
              <td>Contact:</td>
              <td>{{$user->phone}}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- users view card details ends -->

</section>
<!-- users view ends -->
@endsection
{{-- page scripts --}}
@section('page-scripts')
{{-- <script src="{{asset('js/scripts/pages/app-users.js')}}"></script> --}}
@endsection
