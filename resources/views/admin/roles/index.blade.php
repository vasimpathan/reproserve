
@extends('layouts.admin')

@section('title', 'Roles')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="mb-0 fw-semibold">Roles</h4>
                <a href="{{ route('pages.create') }}" class="btn btn-primary">Add Role</a>
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
                    <!-- <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Pages</h5>
                        <a href="{{ route('pages.create') }}" class="btn btn-primary">Add New Page</a>
                    </div> -->

                    <div class="card-body p-20" >
                        <table class="table table-bordered mb-0"  id="dataTable" data-page-length='10'>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Role Name</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th width="150px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($roles as $key => $role)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>{{ $role->description }}</td>
                                    <td>
                                        {!! $role->status
                                        ? '<span class="badge bg-success">Active</span>'
                                        : '<span class="badge bg-danger">Inactive</span>' !!}
                                    </td>
                                    <td>
                                        <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-sm btn-warning">Edit</a>

                                        <form action="{{ route('roles.destroy', $role->id) }}" method="POST"
                                            style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return confirm('Are You Sure?')" class="btn btn-sm btn-danger">
                                                Delete
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
    </div> <!-- end row -->
</div>
@endsection