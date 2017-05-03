<?php

namespace App\Http\Controllers;

use App\Chapter;
use App\Http\Requests\CreateInstructionRequest;
use App\Instruction;
use Illuminate\Http\Request;
use App\Task;
use App\Lesson;

class AdminInstructionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function create()
    {
        return view('admin.instruction.create');
    }

    public function createWithTaskID($taskID)
    {
        return view('admin.instruction.create')->with([
            'taskID' => $taskID,
        ]);
    }

    /**
     * @param CreateTaskRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateInstructionRequest $request)
    {
        $task = Task::where('id',$request->task_id)->first();
        $lesson = Lesson::where('id',$task->lesson_id)->first();
        $chapter = Chapter::where('id',$lesson->chapter_id)->first();
        Instruction::create([
            'content_ins' => $request->content_ins,
            'solution' => $request->solution,
            'task_id' => $request->task_id,
        ]);
        return redirect()->route('admin.instruction.show',['course' => 1,'chapter' => $chapter->id,'lesson' => $lesson->id,'task' => $task->id])->with('message','Thêm Task thành công');
    }

    public function edit(Instruction $instruction)
    {
        return view('admin.instruction.edit', compact('instruction'));
    }

    public function update(Request $request, Instruction $instruction)
    {
        $task = Task::where('id',$instruction->task_id)->first();
        $lesson = Lesson::where('id',$task->lesson_id)->first();
        $chapter = Chapter::where('id',$lesson->chapter_id)->first();
        $instruction->update($request->all());
        return redirect()->route('admin.instruction.show',['course' => 1,'chapter' => $chapter->id,'lesson' => $lesson->id,'task' => $task->id])->with('message','Cập nhật Task thành công');
    }

    public function destroy(Instruction $instruction)
    {
        $task = Task::where('id',$instruction->task_id)->first();
        $lesson = Lesson::where('id',$task->lesson_id)->first();
        $chapter = Chapter::where('id',$lesson->chapter_id)->first();
        $instruction->delete();
        return redirect()->route('admin.instruction.show',['course' => 1,'chapter' => $chapter->id,'lesson' => $lesson->id,'task' => $task->id])->with('message','Xóa thành công');
    }
}

