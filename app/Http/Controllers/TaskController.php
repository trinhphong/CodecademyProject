<?php
namespace App\Http\Controllers;
use App\Instruction;
use App\Lesson;
use Illuminate\Http\Request;
use App\Task;
class TaskController extends Controller
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
    public function index($lessonID)
    {
        $lesson = Lesson::where('id',$lessonID)->first();
        $task = Task::where('lesson_id',$lessonID)->first();
        $tasks = Task::where('lesson_id',$lessonID)->get();
        $count = count($tasks);
        $instructions = Instruction::where('task_id',$task->id)->get();
        return view('client.lesson.index')->with([
            'task' => $task,
            'lesson' => $lesson,
            'count' => $count,
            'instructions' => $instructions
        ]);
    }
    public function showNext($lessonID,$taskID)
    {
        $lesson = Lesson::where('id',$lessonID)->first();
        $task = Task::where(['lesson_id'=>$lessonID,'id' => $taskID])->first();
        $tasks = Task::where(['lesson_id'=>$lessonID])->get();
        $count = count($tasks);
        $instructions = Instruction::where('task_id',$taskID)->get();
        return view('client.lesson.index')->with([
            'task' => $task,
            'lesson' => $lesson,
            'count' => $count,
            'instructions' => $instructions
        ]);
    }
    public function check(Request $request)
    {
        $listInstructions = Instruction::where('task_id',$request->taskID)->get();
        $codeValue = $request->codeUser;
        $successInstructions = array();
        foreach ($listInstructions as $instruction)
        {
            if(str_contains(strtolower($codeValue),strtolower($instruction->solution))) {
                $successInstructions[] = $instruction->id;
            }
        }
        $response = [
            'successInstructions' => $successInstructions
        ];
        return response()->json($response,200);
    }
}