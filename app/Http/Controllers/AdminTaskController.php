<?php

namespace App\Http\Controllers;

use App\Chapter;
use Illuminate\Http\Request;
use App\Http\Requests\CreateTaskRequest;
use App\Task;
use App\Lesson;

class AdminTaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function create()
    {
        return view('admin.task.create');
    }

    public function createWithLessonID($lessonID)
    {
        return view('admin.task.create')->with([
            'lessonID' => $lessonID
        ]);
    }

    /**
     * @param CreateTaskRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateTaskRequest $request)
    {
        $lesson = Lesson::where('id',$request->lesson_id)->first();
        $chapter = Chapter::where('id',$lesson->chapter_id)->first();
        Task::create([
            'name' => $request->name,
            'content_task' => $request->content_task,
            'source_code_html' => $request->source_code_html,
            'source_cdoe_css' => $request->source_code_css,
            'lesson_id' => $request->lesson_id,
            'stt' => $request->stt
        ]);
        return redirect()->route('admin.task.show',['course' => 1,'chapter' => $chapter->id,'lesson' => $request->lesson_id])->with('message','Thêm Task thành công');
    }

    public function edit(Task $task)
    {
        return view('admin.task.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $lesson = Lesson::where('id',$request->lesson_id)->first();
        $chapter = Chapter::where('id',$lesson->chapter_id)->first();
        $task->update($request->all());
        return redirect()->route('admin.task.show',['course' => 1,'chapter' => $chapter->id,'lesson' => $task->lesson_id])->with('message','Cập nhật Task thành công');
    }

    public  function destroy(Task $task)
    {
        $lesson = Lesson::where('id',$task->lesson_id)->first();
        $chapter = Chapter::where('id',$lesson->chapter_id)->first();
        $task->delete();
        return redirect()->route('admin.lesson.show',['course' => 1,'chapter' => $chapter->id,'lesson' => $task->lesson_id])->with('message','Xóa thành công');
    }
}
