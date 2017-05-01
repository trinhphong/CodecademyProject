<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Let's Code!!!</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="icon" type="image/gif" href="http://www.iconshock.com/img_jpg/SUPERVISTA/video_production/jpg/24/title_icon.jpg" />
    <style>
        html, body {
            background: url("{{asset('assets/images/school_background.jpg')}}");
            background-size: cover;
            color: #636b6f;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-left: 800px;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
                <a style="color: white; font-size: large" href="{{ url('/home') }}">Home</a>
            @else
                <a style="color: white; font-size: large" href="{{ url('/login') }}">Login</a>
                <a style="color: white; font-size: large" href="{{ url('/register') }}">Register</a>
            @endif
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            <p style="color: greenyellow">CODECADEMY</p>
            <p style="color: yellow">HTML & CSS</p>
            <p style="color: lawngreen">Welcome to Codecademy!</p>
        </div>

        <div class="links m-b-md">
            <a style="color: white; font-size: large" href="https://www.codecademy.com/learn/learn-html-css" target="_blank">Web Tham Khảo</a>
            <a style="color: white; font-size: large" href="https://github.com/trinhphong/Codecademy" target="_blank">My Source Code GitHub</a>
        </div>
    </div>
</div>
</body>
</html>
