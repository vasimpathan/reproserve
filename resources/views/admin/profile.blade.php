
@extends('layouts.admin')

@section('title', 'My Profile')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="mb-0 fw-semibold">My Profile</h4>
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
                            
                             <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label>Name</label>
                                    <input type="text" name="name" value="{{ $admin->name }}" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="email" name="email" value="{{ $admin->email }}" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label>Mobile No.</label>
                                    <input type="text" name="mobileno" value="{{ $admin->mobileno }}" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label>Profile Photo</label><br>
                                    <img src="{{ $admin->photo ? asset('uploads/admins/'.$admin->photo) : asset('default-avatar.png') }}"
                                        width="80" class="rounded mb-2">

                                    <input type="file" name="photo" class="form-control">
                                </div>

                                <button class="btn btn-primary">Update Profile</button>
                            </form>   
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->

            
    </div> <!-- end row -->
</div>
@endsection