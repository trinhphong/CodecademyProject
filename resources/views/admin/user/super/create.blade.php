@extends('admin.index')

@section('content-admin')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Create Admin</h3>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(array('route'=>'super.admin.store')) !!}
                        <div class="form-group">
                            {!! Form::label('name','Admin Name') !!}
                            {!! Form::text('name',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email','email') !!}
                            {!! Form::text('email',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('password','Password') !!}
                            {!! Form::password('password',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('role','Role') !!}
                            {!! Form::text('role',null,['class'=>'form-control']) !!}
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

                            @if(Session::has('fail'))
                                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection