
@extends('layouts.admin')

@section('title', 'Edit Page')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="mb-0 fw-semibold">Edit Page</h4>
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
                        <form action="{{ route('roles.update', $role->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            @include('admin.roles.form')
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
    </div> <!-- end row -->
</div>
@endsection


@push('scripts')
<script>
    document.getElementById('page-form').addEventListener('submit', function () 
    {
        let html = document.querySelector('#snow-editor .ql-editor').innerHTML;
        document.getElementById('content-input').value = html;
    });
</script>
@endpush