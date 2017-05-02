<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    public function showCourse()
    {
        $course = Course::all()->first();

        return view('admin.course.index')->with([
           'course' => $course
        ]);
    }
}
