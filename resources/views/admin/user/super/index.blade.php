@extends('admin.index')

@section('content-admin')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Quyền: {{Auth::user()->role}}</h3>
                    </div>
                    <div class="panel-body">
                        <div class="panel-item">
                            <a class="btn btn-success" href="{{route('super.admin.create')}}">
                                Create
                            </a>
                        </div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>email</th>
                                <th>Role</th>
                                <th>Manage</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($admins as $admin)
                                @if($admin->role != 'Super Admin')
                                    <tr>
                                        <td>{{$admin->name}}</td>
                                        <td>{{$admin->email}}</td>
                                        <td>{{$admin->role}}</td>
                                        <td>

                                        </td>
                                    </tr>
                                    @endif
                            @endforeach
                            </tbody>
                        </table>
                        <div class="panel-item">
                            @if(Session::has('message'))
                                <div class="alert alert-success">{{Session::get('message')}}</div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection