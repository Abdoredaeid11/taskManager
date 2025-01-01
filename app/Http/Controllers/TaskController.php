<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index(){
        $tasks=Task::where('user_id',auth()->id())->get();
        return view('task.index',compact('tasks'));

    }


    public function create(){

        return view('task.create');   

    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'priority' => 'required',
            'due_date' => 'required|date',
            'status'=>'required',
            

        ]);

        Task::create([
            'name' => $request->title,
            'description' => $request->description,
            'priority' => $request->priority,
            'due_date' => $request->due_date,
            'Status'=>$request->status,

            'user_id' => auth()->id(),
        ]);

        return redirect()->route('task.index');

    }
}
