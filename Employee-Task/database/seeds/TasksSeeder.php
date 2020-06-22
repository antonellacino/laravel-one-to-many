<?php

use Illuminate\Database\Seeder;
use App\Task;
use App\Employee;
class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Task::class,50)
            -> make()
            -> each(function ($task){
               $employee=Employee::inRandomOrder()->first();
               $task->employees()->associate($employee);
               $task->save();
            });
    }
}
