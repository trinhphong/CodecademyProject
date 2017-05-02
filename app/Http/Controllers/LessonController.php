<?php

namespace App\Http\Controllers;

use App\Lesson;
use Illuminate\Http\Request;
use App\Http\Requests\CreateLessonRequest;

class LessonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function create()
    {
        return view('admin.lesson.create');
    }

    public function createWithChapterID($chapterID)
    {
        return view('admin.lesson.create')->with([
            'chapterID' => $chapterID
        ]);
    }

    public function store(CreateLessonRequest $request)
    {
        Lesson::create([
            'name' => $request->name,
            'chapter_id' => $request->chapter_id,
        ]);
        return redirect()->route('admin.lesson.show',['course' => 1,'chapter' => $request->chapter_id])->with('message','Thêm Lesson thành công');
    }

    public function edit(Lesson $lesson)
    {
        return view('admin.lesson.edit', compact('lesson'));
    }

    public function update(Request $request, Lesson $lesson)
    {
        $lesson->update($request->all());
        return redirect()->route('admin.lesson.show',['course' => 1,'chapter' => $lesson->chapter_id])->with('message','Cập nhật Lesson thành công');
    }

    public  function destroy(Lesson $lesson)
    {
        $lesson->delete();
        return redirect()->route('admin.lesson.show',['course' => 1,'chapter' => $lesson->chapter_id])->with('message','Xóa thành công');
    }
}
