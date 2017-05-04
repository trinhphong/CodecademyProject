@extends('admin.index')

@section('content-admin')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        Quản Lý Instruction của Task {{$task->id}} - {{$task->name}}
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Content</th>
                                <th>Solution</th>
                                <th>Manage</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($instructions as $instruction)
                                <tr>
                                    <td>{{$instruction->content_ins}}</td>
                                    <td>{{$instruction->solution_HTML}}</td>
                                    <td>
                                        {!! Form::open(array('route'=>['instruction.destroy',$instruction->id],'method'=>'DELETE')) !!}
                                        <a href="{{route('instruction.edit',$instruction)}}" class="btn btn-primary">
                                            Edit
                                            <span><i class="glyphicon glyphicon-edit"></i></span>
                                        </a>
                                        {!! Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="panel-item">
                            <a href="{{route('instruction.create.id',$task->id)}}" class="btn btn-primary">
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