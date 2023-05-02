<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return Inertia::render('tasks/index', ['tasks' => Task::all()]);
        
        $user = Auth::user();
        $tasks = Task::where('user_id', $user->id)->get();
        return Inertia::render('tasks/index', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('tasks/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'priority'=>'required',
            'status'=>'required',
            // 'user_id' => 'required'
        ]);
        $task=new Task;
        $task->name=$request->name;
        $task->description=$request->description;
        $task->priority=$request->priority;
        $task->status=$request->status;
        $task->user_id = auth()->user()->id;
        $task->save();
        return redirect()->route('tasks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return Inertia::render('tasks/show',['task'=>$task]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $task=Task::find($request->id);
        $task->name=$request->name;
        $task->description=$request->description;
        $task->priority=$request->priority;
        $task->status=$request->status;
        $task->save();
        return redirect()->route('tasks.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index');
    }
}
