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
                        @if(Auth::user()->role == 'Super Admin')
                            <a class="btn btn-primary" href="{{route('super.admin.show')}}">Quản Lý Admin</a>
                            <a class="btn btn-primary" href="">Quản Lý User</a>
                            @else
                            <a class="btn btn-primary" href="#">Quản Lý User</a>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection