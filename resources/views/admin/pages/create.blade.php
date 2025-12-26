
@extends('layouts.admin')

@section('title', 'CMS Page')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="mb-0 fw-semibold">Create Page</h4>
                <a href="{{ url('admin/pages') }}" class="btn btn-danger pull-right">Back To List</a>
                <!-- <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Form</a></li>
                    <li class="breadcrumb-item active">My Profile</li>
                </ol> -->
            </div>
        </div>
    </div>


    <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body p-20" >
                        <form action="{{ route('pages.store') }}" method="POST" id="page-form">
                            @csrf
                            @include('admin.pages.form')
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
    </div> <!-- end row -->
</div>
@endsection
