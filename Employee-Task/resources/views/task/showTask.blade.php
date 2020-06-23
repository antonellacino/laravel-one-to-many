@extends('Layouts.main_layout')

@section('content')

    <h3>{{$task->name}}</h3><br>

    <p>Descrizione: {{$task->description}}</p>
    <p>Deadline: {{$task->deadline}}</p>

    <p>Seguito da: <a href="{{route('showEmployee', $task->employee->id)}}">{{$task->employee->firstname}} {{$task->employee->lastname}}</a></p>
{{dd($task->employee->id)}}
@endsection
