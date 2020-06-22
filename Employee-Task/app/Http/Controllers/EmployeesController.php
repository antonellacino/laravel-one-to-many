<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index(){
        $tasks=Task::all();
        return view('welcome',compact('tasks'));
    }
    public function editTask($id){
        $task=Task::findOrFail($id);
        return view('editTask', compact('task'));
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
