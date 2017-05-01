@extends('layouts.app')

@section('head')
    <link href="{{ asset('css/admin/style.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-sm-2">
                <div class="sidebar content-box" style="display: block">
                    <ul class="nav">
                        <li>
                            <a href="/admin">
                                <i class="glyphicon glyphicon-dashboard"></i>
                                Bảng Điều Khiển
                            </a>
                        </li>
                        <li>
                            <a href="/admin/manager/course">
                                <i class="glyphicon glyphicon-book"></i>
                                Quản Lý Bài Học
                            </a>
                        </li>
                        <li>
                            <a href="student.html">
                                <i class="glyphicon glyphicon-user"></i>
                                Quản Lý Học Viên
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-10">
                @yield('content-admin')
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="copy text-center">
                Trình Phong
            </div>
        </div>
    </footer>
@endsection