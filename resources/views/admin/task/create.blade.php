@extends('admin.index')

@section('content-admin')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Create Chapter {{$lessonID}}</h3>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(array('route'=>'task.store')) !!}
                        <div class="form-group">
                            {!! Form::label('name','Task Name') !!}
                            {!! Form::text('name',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('content_task','Task Content') !!}
                            {!! Form::textarea('content_task',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('source_code_html','Task Source HTML') !!}
                            {!! Form::textarea('source_code_html',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('source_code_css','Task Source CSS') !!}
                            {!! Form::textarea('source_code_css',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('lesson_id','Lesson') !!}
                            {!! Form::text('lesson_id',$lessonID,['class'=>'form-control', 'readonly' => 'true']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('stt','Task Stt') !!}
                            {!! Form::text('stt',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::button('Create',['type' => 'submit', 'class'=>'btn btn-primary']) !!}
                            <a class="btn btn-danger" onclick="history.back()">
                                Back
                                <span><i class="glyphicon glyphicon-backward"></i></span>
                            </a>
                        </div>
                        {!! Form::close() !!}
                    </div>
                    <div class="panel-item">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger text-center">
                                @foreach ($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection