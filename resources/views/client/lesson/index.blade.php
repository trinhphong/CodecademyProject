@extends('layouts.app')

@section('fixed-nav-top')
    style="margin: 0"
    @endsection
@section('head-style')
    <link href="{{ asset('codemirrormini/lib/codemirror.css') }}" rel="stylesheet">
    <link href="{{ asset('codemirrormini/theme/dracula.css') }}" rel="stylesheet">
    <link href="{{ asset('codemirrormini/scroll/simplescrollbars.css') }}" rel="stylesheet">
    <script src="{{ asset('codemirrormini/lib/codemirror.js') }}"></script>
    <script src="{{ asset('codemirrormini/mode/css/css.js') }}"></script>
    <script src="{{ asset('codemirrormini/mode/xml/xml.js') }}"></script>
    <script src="{{ asset('codemirrormini/mode/htmlmixed/htmlmixed.js') }}"></script>
    <script src="{{ asset('codemirrormini/mode/javascript/javascript.js') }}"></script>
    <script src="{{ asset('codemirrormini/scroll/simplescrollbars.js') }}"></script>
    @endsection

@section('on_load')
    onload="loadIframe()"
    @endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4" style="overflow-y: scroll;position: absolute;padding: 0; top: 7%; right: 66.66666666666667%; bottom: 5%;left: 0%;">
                <div class="panel panel-default" style="padding: 0;height: 100%">
                    <div class="panel-heading">
                        <i class="glyphicon glyphicon-book"></i>
                        Learn
                    </div>
                    <div id="ss"class="panel-body" style="padding: 0 10px 0 10px;">
                        {{$task->content}}
                        <div class="panel panel-default" style="margin: 0">
                            <div class="panel-heading">
                                <p>Instructions</p>
                            </div>
                            <div class="panel panel-body">
                                @foreach($instructions as $instruction)
                                    <div id="Ins-{{$instruction->id}}">
                                        <p>{{$instruction->content}}</p>
                                    </div>
                                    @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="background-color: #282a36;position: absolute;top: 7%; right: 33.33333333333334% ; bottom: 5%; left: 33.33333333333333%;">
                <form method="POST" id="submit-form" style="height: 100%">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">index.html</a></li>
                        <li><a data-toggle="tab" href="#menu1">style.css</a></li>
                    </ul>
                    <div class="tab-content" style="height: 85%">
                        <div id="home" class="tab-pane fade in active" style="height: 100%">
                            <textarea id="editor-html">{{$task->source_code_html}}</textarea>
                        </div>
                        <div id="menu1" class="tab-pane fade" style="height: 100%">
                            <textarea id="editor-css">{{$task->source_code_css}}</textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success pull-right">
                        RUN
                    </button>
                </form>
            </div>
            <div class="col-md-4" style="padding: 0; position: absolute;top: 7%; right: 0%; bottom: 5%;left: 66.66666666666666%;%;">
                <iframe id="result-content" style="height: 99%;width: 100%"></iframe>
            </div>
        </div>
    </div>
    <div class="col-md-12" style="position:absolute; top:95%; height: 50px;background-color: #282a36;width: 100%">
        <div class="col-md-4" style="background-color: black; height: 50px;width: 33.333333333%; left: 33.333333333%">
            @if($task->stt > 1)
                <a type="submit" class="btn btn-primary pull-left" href="#" onclick="history.back()">Back</a>
            @else
                <a type="submit" class="btn btn-primary pull-left" href="#" onclick="">Back</a>
                @endif

            <div style="display: inline; font-size: large; color: white;position: absolute; left: 45%">{{($task->stt)}}/{{$count}}</div>

            @if ($task->stt < $count)
                <a type="submit" class="btn btn-primary pull-right" href="{{route('task.showNext',['lesson'=>$lesson,'taskID'=>$task->id+1])}}">Next</a>
            @else
                <a type="submit" class="btn btn-primary pull-right" href="#">Next Lesson</a>
                @endif
        </div>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
    <script>
        var editor_html = CodeMirror.fromTextArea(document.getElementById("editor-html"), {
            mode: "text/html",
            theme: "dracula",
            lineNumbers: true,
            lineWrapping: true,
            scrollbarStyle: "overlay"
        });

        var editor_css = CodeMirror.fromTextArea(document.getElementById("editor-css"), {
            mode: "text/css",
            theme: "dracula",
            scrollbarStyle: "overlay"
        });

        function loadIframe() {
            var html = $('#editor-html').val();
            var css = $('#editor-css').val();
            var result = $('#result-content');
            result.ready(function () {
                result.contents().find("head").append('<style>' + css + '</style>');
                result.contents().find("body").html(html);
            });
        }

        jQuery("#submit-form").submit(function (e) {
            e.preventDefault();
            var html = $('#editor-html').val();
            var css = $('#editor-css').val();
            var result = $('#result-content');
            result.ready(function () {
                result.contents().find("head").append('<style>'+css+'</style>');
                result.contents().find("body").html(html);
            });
            var codeUser = editor_html.getValue();
            $.ajax({
                url: '{{route('task.check')}}',
                type: 'POST',
                data: {
                    taskID: '{{$task->id}}',
                    codeUser: codeUser,
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    var successInstruction = response.successInstructions;
                    successInstruction.forEach(function (item) {
                        var ins = $('#Ins-'+item).find('p');
                        ins.css('color','red');
                    });
                }
            })
        });
    </script>


@endsection