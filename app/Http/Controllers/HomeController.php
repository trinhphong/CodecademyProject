<?php

namespace App\Http\Controllers;

use App\Lesson;
use Illuminate\Http\Request;
use App\Course;
use App\Chapter;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $courses = Course::where('id',1)->first();
        $chapters = Chapter::where('course_id',1)->get();
        $listLessons = array();
        foreach($chapters as $chapter) {
            $lessons = Lesson::where('chapter_id', $chapter->id)->get();
            array_push($listLessons, $lessons);
        }

        return view('client.home.index')->with([
            'course' => $courses,
            'chapters' => $chapters,
            'listLessons'=> $listLessons
        ]);
    }


}
