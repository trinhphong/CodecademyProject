@extends('layouts.app')

@section('head-style')
    <link href="{{ asset('css/admin/style.css') }}" rel="stylesheet">
    @endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="col-md-12" style="background-color: #E9EAEA; padding: 0">
                    <div class="col-md-3" style="background-color: #204056;padding: 0; width: 160px; height: 163px;">
                        <img src="{{asset('assets/images/icon/html5.png')}}" class="img-rounded">
                    </div>
                    <div class="col-md-9">
                        <div class="title">
                            <h1 style="margin-bottom: 0px">{{$course->name}}</h1>
                            <h3 style="margin-top: 10px">Currently on: HTML Elements</h3>
                            <button type="submit" class="button btn-success" style="width: 150px; height: 50px">START</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-12" style="margin-top: 20px">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">Overview</a></li>
                        <li><a data-toggle="tab" href="#menu1">Syllabus</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active" style="margin-top: 10px">
                            <p style="font-size: medium">{{$course->overview}}</p>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <div class="sidebar content-box" style="display: block;">
                                <ul class="nav">
                                @foreach($chapters as $chapter)
                                    <!-- Main menu -->
                                        <li class="submenu">
                                            <a href="#">
                                                <span style="margin-right: 20px;">{{$chapter->id}}</span> <span>{{$chapter->name}}</span>
                                                <span class="caret pull-right"></span>
                                            </a>
                                            <!-- Sub menu -->
                                            <ul style="display: none;">
                                                <?php $lessons = array_shift($listLessons) ?>
                                                @foreach($lessons as $lesson)
                                                    <li><a href="{{route('task.show',['lesson' => $lesson])}}">{{$lesson->name}}</a></li>
                                                    @endforeach
                                            </ul>
                                        </li>
                                @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection