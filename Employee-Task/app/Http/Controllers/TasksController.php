<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
class TasksController extends Controller
{
    public function index(){
        $tasks=Task::all();
        return view('task.welcome',compact('tasks'));
    }

    public function showTask($id){
        $task=Task::with('employee')->findOrFail($id);
        return view('task.showTask', compact('task'));
    }

    //update--------------------------------------------------------
    public function editTask($id){
        $task=Task::findOrFail($id);
        return view('task.editTask', compact('task'));
    }
    public function storeTask(Request $request, $id){
        $validateData=$request->validate([
            'name' => 'required',
            'description'=> 'required',
            'deadline'=> 'required',
        ]);

        Task::whereId($id)->update($validateData);
        return redirect()->route('home');
    }
}
