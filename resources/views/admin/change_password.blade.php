
@extends('layouts.admin')

@section('title', 'Change Password')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="mb-0 fw-semibold">Change Password</h4>
                <!-- <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Form</a></li>
                    <li class="breadcrumb-item active">My Profile</li>
                </ol> -->
            </div>
        </div>
    </div>


    <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-12">
                            <form action="{{ route('admin.change.password.update') }}" method="POST">
                                @csrf

                                <div class="mb-3">
                                    <label>Old Password</label>
                                    <input type="password" name="old_password" class="form-control">
                                    @error('old_password') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>

                                <div class="mb-3">
                                    <label>New Password</label>
                                    <input type="password" name="new_password" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label>Confirm New Password</label>
                                    <input type="password" name="confirm_password" class="form-control">
                                    @error('confirm_password') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>

                                <button class="btn btn-primary">Update Password</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->

            
    </div> <!-- end row -->
</div>
@endsection