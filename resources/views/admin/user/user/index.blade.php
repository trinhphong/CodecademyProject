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
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>email</th>
                                <th>Manage</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            {!! Form::open(array('route'=>['admin.user.destroy',$user->id],'method'=>'DELETE')) !!}
                                            {!! Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
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