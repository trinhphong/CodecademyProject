@extends('admin.index')

@section('content-admin')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Quản lý Course</h4>
                    </div>
                    <div class="panel body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th width="15%">Name</th>
                                    <th width="15%">Language</th>
                                    <th width="50%">Overview</th>
                                    <th width="20%">Manage</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$course->name}}</td>
                                    <td>{{$course->language}}</td>
                                    <td>{{$course->overview}}</td>
                                    <td>
                                        <a href="{{route('course.edit',$course->id)}}" class="btn btn-primary">
                                            Edit
                                            <span><i class="glyphicon glyphicon-edit"></i></span>
                                        </a>
                                        <a href="#" class="btn btn-danger">
                                            Quản Lý Chapter
                                            <span><i class="glyphicon glyphicon-list"></i></span>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        @if(Session::has('message'))
                            <div class="alert alert-success">{{Session::get('message')}}</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection