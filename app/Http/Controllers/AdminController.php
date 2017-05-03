<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Chapter;
use App\Course;
use App\Http\Requests\CreateAdminRequest;
use App\Instruction;
use App\Lesson;
use App\Task;
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

    public function showTask($courseID,$chapterID,$lessonID)
    {
        $tasks = Task::where('lesson_id',$lessonID)->get();
        $lesson = Lesson::where('id',$lessonID)->first();
        return view('admin.task.index')->with([
           'tasks' => $tasks,
            'lesson' => $lesson
        ]);
    }

    public function showInstruction($courseID,$chapterID,$lessonID,$taskID)
    {
        $instructions = Instruction::where('task_id',$taskID)->get();
        $task = Task::where('id',$taskID)->first();
        return view('admin.instruction.index')->with([
           'instructions' => $instructions,
            'task' => $task
        ]);
    }

    public function showAuth()
    {
        return view('admin.user.index');
    }

    public function showAdmin()
    {
        $admins = Admin::all();
        return view('admin.user.super.index')->with([
            'admins' => $admins
        ]);
    }

    public function create()
    {
        return view('admin.user.super.create');
    }

    public function store(CreateAdminRequest $request)
    {
        $admin = Admin::where('email',$request->email)->first();
        if (isset($admin->email)) {
            return redirect()->route('super.admin.create')->with('fail', 'Trùng email - Thêm Admin Thất Bại');
        }
        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role
        ]);
        return redirect()->route('super.admin.show')->with('message', 'Thêm Admin thành công');
    }
}
