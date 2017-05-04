<?php
namespace App\Http\Controllers;
use App\Chapter;
use App\Instruction;
use App\Lesson;
use Illuminate\Http\Request;
use App\Task;
use App\Http\Requests\CreateTaskRequest;
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
    public function showNext($lessonID,$taskSTT)
    {
        $lesson = Lesson::where('id',$lessonID)->first();
        $task = Task::where(['lesson_id'=>$lessonID,'stt' => $taskSTT])->first();
        $tasks = Task::where(['lesson_id'=>$lessonID])->get();
        $count = count($tasks);
        $instructions = Instruction::where('task_id',$task->id)->get();
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
        $codeValue_HTML = $request->codeUser_HTML;
        $codeValue_CSS = $request->codeUser_CSS;
        $successInstructions = array();
        foreach ($listInstructions as $instruction)
        {
//            $successInstructions[] = $instruction->solution_HTML;
//            $successInstructions[] = $codeValue_HTML;
            if(str_contains(strtolower($instruction->solution_HTML),strtolower($codeValue_HTML))) {
                if(isset($codeValue_CSS))
                {
                    if(str_contains(strtolower($instruction->solution_CSS),strtolower($codeValue_CSS)))
                    {
                        $successInstructions[] = $instruction->id;
                    }
                }
                else
                {
                    $successInstructions[] = $instruction->id;
                }
            }
        }
        $response = [
            'successInstructions' => $successInstructions
        ];
        return response()->json($response,200);
    }
}