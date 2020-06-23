<?php

namespace App\Http\Controllers;
use App\Employee;
use App\Task;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function showEmployee($id){
        $employee=Employee::findOrFail($id);
        return view('employee.showEmployee',compact('employee'));
    }


}
