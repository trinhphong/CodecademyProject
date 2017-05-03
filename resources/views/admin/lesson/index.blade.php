@extends('admin.index')

@section('content-admin')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        Quản Lý Lesson của Chapter {{$chapter->id}} - {{$chapter->name}}
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Manage</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($lessons as $lesson)
                                <tr>
                                    <td>{{$lesson->name}}</td>
                                    <td>
                                        {!! Form::open(array('route'=>['lesson.destroy',$lesson->id],'method'=>'DELETE')) !!}
                                        <a href="{{route('lesson.edit', $lesson)}}" class="btn btn-primary">
                                            Edit
                                            <span><i class="glyphicon glyphicon-edit"></i></span>
                                        </a>
                                        {!! Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']) !!}
                                        <a href="{{route('admin.task.show',['course' => $chapter->course_id,'chapter' => $chapter->id, 'lesson' => $lesson->id])}}" class="btn btn-warning">
                                            Quản lý Task
                                            <span><i class="glyphicon glyphicon-list"></i></span>
                                        </a>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="panel-item">
                            <a href="{{route('lesson.create.id',$chapter->id)}}" class="btn btn-primary">
                                Create
                                <span><i class="glyphicon glyphicon-dashboard"></i></span>
                            </a>
                            <a class="btn btn-danger" onclick="history.back()">
                                Back
                                <span><i class="glyphicon glyphicon-backward"></i></span>
                            </a>
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