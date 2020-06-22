@extends('Layouts.main_layout')

@section('content')
    <h1>Tasks</h1>

    <div class="employees">
        <ul>
         @foreach($tasks as $task)
                <li class="name">{{$task->name}}</li>
                <a href="{{ route('editTask',$task->id) }}">Modifica</a><br><br>
            @endforeach,
        </ul>
    </div>

@endsection
