@extends('comon.dashboard-layout')
@section('content')
    {{-- Roles --}}


    {{-- content --}}
    <div class="container mt-5">
        <a href="{{ url('roles') }}" class="btn btn-primary mx-1">Roles</a>
        <a href="{{ url('permissions') }}" class="btn btn-info mx-1">Permissions</a>
        <a href="{{ route('user.index') }}" class="btn btn-warning mx-1">Users</a>
    </div>

    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12">

                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif

                <div class="card mt-3">
                    <div class="card-header">
                        <h4>
                            Roles
                            <a href="{{ url('roles/create') }}" class="btn btn-primary float-end">Add Role</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th width="40%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>role-id</td>
                                        <td>role-name </td>
                                        <td>
                                            <a href=""
                                                class="btn btn-primary">Role Permission</a>
                                            <a href=""
                                                class="btn btn-primary">Edit</a>
                                            <a href=""
                                                class="btn btn-danger mx-2">Delete</a>
                                        </td>
                                    </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- end content --}}
@endsection
