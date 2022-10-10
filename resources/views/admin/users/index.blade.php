@php($page_class = 'users')
@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a class="pull-right btn btn-inline-block btn-info" href="{{ route('admin.user.create') }}">
                        <i class="fa fa-plus"></i> Add New
                    </a>
                    <h4 class="card-title d-inline-block">Users</h4>
                    <h6 class="card-subtitle">Under this section you will find list of all users</h6>
                    <div class="table-responsive m-t-20">
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Role</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Verified</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>@if($user->role_id==1) 
                                        <label class="label label-success">Admin </label> 
                                        @elseif($user->role_id==2)  
                                        <label class="label label-primary"> Writer  </label>
                                        @else 
                                        <label class="label label-danger"> --- </label> 
                                        @endif</td>
                                    <td>{{ $user->first_name }}</td>
                                    <td>{{ $user->last_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>@if($user->status==1) 
                                        <label class="label label-success">Active </label> 
                                        @elseif($user->status==2)  
                                        <label class="label label-danger"> Deactive  </label>
                                        @else 
                                        <label class="label label-danger"> Blocked </label> 
                                        @endif
                                    </td>
                                    <td>@if($user->is_verified==1) <label class="label label-success">Verified </label> @else <label class="label label-danger"> Not verified  </label> @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-outline-info border-0 shadow-none" title="Edit" data-toggle="tooltip" href="{{ route('admin.user.edit',['user'=>$user->id]) }}"><icon class="fa fa-pencil-square-o"></icon></a>

                                        <form action="{{ route('admin.user.destroy',['user'=>$user->id]) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="#" class="btn btn-outline-danger border-0 shadow-none row-action-btn" title="Delete" data-toggle="tooltip" onclick="this.closest('form').submit();return false;">
                                                <icon class="ti-trash"></icon>
                                            </a>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection