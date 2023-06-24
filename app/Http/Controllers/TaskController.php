<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Person;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        //$tasks = Task::all();
        $tasks = Task::open()->get();
        return view('task.index',compact('tasks'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $targetModel = match ($request->input('target_model')) {
            'business' => Business::find($request->input('taskable_id')) ,
            'person' => Person::find($request->input('taskable_id')) ,
        };

        $targetModel->tasks()->create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        return redirect()->back();
    }

    public function complete(Request $request, Task $task)    
    {
        $task->markAsCompleted();
        return redirect()->back();
    }
}
