@extends('admin.index')

@section('content-admin')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Update Course</h3>
                    </div>
                    <div class="panel-body">
                        {!! Form::model($course, array('route'=>['course.update',$course->id],'method'=>'PUT')) !!}
                        <div class="form-group">
                            {!! Form::label('name','Name Course') !!}
                            {!! Form::text('name',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('language','Language') !!}
                            {!! Form::text('language',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('overview','Overview') !!}
                            {!! Form::textarea('overview',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::button('Update',['type' => 'submit', 'class'=>'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection