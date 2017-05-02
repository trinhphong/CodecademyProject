@extends('admin.index')

@section('content-admin')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Create Chapter {{$chapterID}}</h3>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(array('route'=>'lesson.store')) !!}
                        <div class="form-group">
                            {!! Form::label('name','Lesson Name') !!}
                            {!! Form::text('name',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('chapter_id','Chapter') !!}
                            {!! Form::text('chapter_id',$chapterID,['class'=>'form-control', 'readonly' => 'true']) !!}
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