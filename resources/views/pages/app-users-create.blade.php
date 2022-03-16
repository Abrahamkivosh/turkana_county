@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Users Create')
{{-- page styles --}}
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/app-users.css')}}">

{{-- vendor scripts --}}

<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/forms/select/select2.min.css')}}">
@endsection



@section('content')
<!-- users view start -->
<section class="users-view">
  <!-- users view media object start -->



  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Add new User/Employee</h5>
      <p class="card-text">
        <form action="{{route('users.store')}}" class="row" method="post">
          @csrf



          <div class="form-group mb-50 col-md-6 col-sm-12 ">
            <label class="text-bold-600" for="name">Employee Name</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus placeholder="Full Name">
            @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="form-group mb-50 col-md-6 col-sm-12 ">
            <label class="text-bold-600" for="email">Email address</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" placeholder="Email address">
            @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="form-group mb-50 col-md-6 col-sm-12 ">
            <label class="text-bold-600" for="email">Employee No</label>
            <input id="employee_no" type="text" class="form-control @error('employee_no') is-invalid @enderror" name="employee_no" value="{{ old('employee_no') }}"  autocomplete="employee_no" placeholder="employee Number">
            @error('employee_no')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="form-group mb-50 col-md-6 col-sm-12 ">
            <label class="text-bold-600" for="name">Phone </label>
            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"  autocomplete="phone" autofocus placeholder="Employee phone">
            @error('phone')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="form-group mb-50 col-md-6 col-sm-12 ">
            <label class="text-bold-600" for="name">national ID </label>
            <input id="national_id" type="text" class="form-control @error('national_id') is-invalid @enderror" name="national_id" value="{{ old('national_id') }}"  autocomplete="national_id" autofocus placeholder="Employee national ID">
            @error('national_id')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="form-group mb-50 col-md-6 col-sm-12 ">

          </div>


          <div class="form-group mb-50 col-md-12 col-sm-12 row ">
            <div class="text text-primary h3" >Select user role(s)</div>

                @foreach ($roles as $role)
                <div class="form-check col-sm-2">
                <label class="form-check-label">
                  <input type="checkbox" class="form-control @error('role') is-invalid @enderror" name="role[]" id="" value="{{$role->id}}" >
                  {{$role->name}}
                </label></div>
                @endforeach

                @error('role')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror




          </div>


          <input type="hidden" name="password" value="password">

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </p>
    </div>
  </div>

</section>
<!-- users view ends -->
@endsection
{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('vendors/js/forms/select/select2.full.min.js')}}"></script>
@endsection
