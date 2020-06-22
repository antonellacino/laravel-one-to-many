<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table="employees";

    public function employees(){
        return $this->belongsTo(Employee::class);
    }
}
