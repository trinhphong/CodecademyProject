<?php
namespace App\Http\Controllers;
use App\Instruction;
use Illuminate\Http\Request;
class InstructionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($taskID)
    {
        $instructions = Instruction::where('task_id',$taskID)->get();
        return view('client.instruction.index')->with([
            'instructions' => $instructions
        ]);
    }
}