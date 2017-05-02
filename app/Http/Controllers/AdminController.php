<?php

namespace App\Http\Controllers;

use App\Chapter;
use App\Course;
use App\Lesson;
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

    public function showChapter($courseID)
    {
        $chapters = Chapter::where('course_id',$courseID)->get();
        $course = Course::all()->first();
        return view('admin.chapter.index')->with([
            'course' => $course,
           'chapters' => $chapters
        ]);
    }

    public function showLesson($courseID,$chapterID)
    {
        $lessons = Lesson::where('chapter_id',$chapterID)->get();
        $chapter = Chapter::where('id',$chapterID)->first();
        return view('admin.lesson.index')->with([
           'lessons' => $lessons,
            'chapter' => $chapter
        ]);
    }
}
