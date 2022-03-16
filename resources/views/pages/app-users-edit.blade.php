@extends('layouts.contentLayoutMaster')
{{-- page title --}}
@section('title','Users Edit')
{{-- vendor styles --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/validation/form-validation.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/forms/select/select2.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/pickers/pickadate/pickadate.css')}}">
@endsection

{{-- page styles --}}
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/app-users.css')}}">
@endsection

@section('content')
<!-- users edit start -->
<section class="users-edit">
  <div class="card">
    <div class="card-body">
      <ul class="nav nav-tabs mb-2" role="tablist">
        <li class="nav-item">
        <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab"
            href="#account" aria-controls="account" role="tab" aria-selected="true">
          <i class="bx bx-user mr-25"></i><span class="d-none d-sm-block">Account</span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link d-flex align-items-center" id="information-tab" data-toggle="tab"
            href="#information" aria-controls="information" role="tab" aria-selected="false">
          <i class="bx bx-info-circle mr-25"></i><span class="d-none d-sm-block">Information</span>
        </a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active fade show" id="account" aria-labelledby="account-tab" role="tabpanel">
            <!-- users edit media object start -->
            <div class="media mb-2">
                <a class="mr-2" href="javascript:void(0);">
                  <img src="/storage/user/{{ $user->image }}" alt="users avatar"
                      class="users-avatar-shadow rounded-circle" height="64" width="64">
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Avatar</h4>
                  <div class="col-12 px-0 d-flex">
                      <a href="javascript:void(0);" class="btn btn-sm btn-primary mr-25">Change</a>
                      <a href="javascript:void(0);" class="btn btn-sm btn-light-secondary">Reset</a>
                  </div>
                </div>
            </div>
            <!-- users edit media object ends -->
            <!-- users edit account form start -->
            <form method="POST" action="{{route('users.update',$user)}}" class="form-validate" enctype="multipart/form-data" >
              @csrf
              @method("PUT")
                <div class="row">
                  <div class="col-12 col-sm-6">

                      <div class="form-group">
                        <div class="controls">
                          <label class="text-bold-600" for="name">Name</label>
                          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}"  autocomplete="name" autofocus placeholder="Full Name">
                          @error('name')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="controls">
                          <label class="text-bold-600" for="email">Email address</label>
                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}"  autocomplete="email" placeholder="Email address">
                          @error('email')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="controls">
                          <label class="text-bold-600" for="phone">Phone</label>
                          <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $user->phone }}"  autocomplete="phone" placeholder="phone ">
                          @error('phone')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="controls">
                          <label class="text-bold-600" for="image">User Image</label>
                          <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value=""  autocomplete="image" placeholder="image ">
                          @error('image')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                      </div>

                  </div>
                  <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <label class="text-bold-600" for="email">National Id</label>
                        <input id="national_id" type="text" class="form-control @error('national_id') is-invalid @enderror" name="national_id" value="{{ $user->national_id }}"  autocomplete="national_id" placeholder="National Id">
                          @error('national_id')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror

                      </div>
                      <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">

                          @if ($user->status =="active")
                          <option value="active" selected >Active</option>
                          <option value="banned" >Banned</option>
                          @else
                          <option value="banned" selected >Banned</option>
                          <option value="active" selected >Active</option>
                          @endif



                        </select>
                      </div>
                      <div class="form-group">
                        <label class="text-bold-600" for="employee_no">employee Number</label>
                        <input id="employee_no" type="text" class="form-control @error('employee_no') is-invalid @enderror" name="employee_no" value="{{ $user->employee_no }}"  autocomplete="employee_no" placeholder="employee No">
                          @error('employee_no')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror

                      </div>



                  </div>

                  <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                      <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                        changes</button>
                      <button type="reset" class="btn btn-light">Cancel</button>
                  </div>
                </div>
            </form>
            <!-- users edit account form ends -->
        </div>
        <div class="tab-pane fade show" id="information" aria-labelledby="information-tab" role="tabpanel">
            <!-- users edit Info form start -->

            <!-- users edit Info form ends -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- users edit ends -->
@endsection

{{-- vendor scripts --}}
@section('vendor-scripts')
<script src="{{asset('vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('vendors/js/pickers/pickadate/picker.js')}}"></script>
<script src="{{asset('vendors/js/pickers/pickadate/picker.date.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-scripts')
{{-- <script src="{{asset('js/scripts/pages/app-users.js')}}"></script> --}}
<script src="{{asset('js/scripts/navs/navs.js')}}"></script>
@endsection
