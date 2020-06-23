@extends('Layouts.main_layout')

@section('content')
    <div class="title">
        <h1>Tasks</h1>
        <div>
            <input type="button" src="{{route('createTask')}}" value="Crea nuovo Task">
        </div>
    </div>

    <div class="employees">
        <ul>
         @foreach($tasks as $task)
                <li class="name">{{$task->name}}</li>
                <li><a href="{{ route('showTask',$task->id) }}">Vedi specifiche</a></li><br>
            @endforeach
        </ul>
    </div>

@endsection
