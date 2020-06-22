@extends('Layouts.main_layout')

@section('content')
    <div >
    <form class="flexColumn" action="{{ route('storeTask',$task->id) }}" method="post">
        @csrf
        @method('POST')

        <label name="name">Name</label>
        <input type="text" name="name" value="{{$task->name}}"><br>

        <label name="description">Description</label>
        <input type="text" name="description" value="{{$task->description}}"><br>

        <label name="deadline">Deadline</label>
        <input type="text" name="deadline" value="{{$task->deadline}}"><br>

        <input type="submit" name="submit" value="Aggiorna modifiche">
    </form>
    </div>
@endsection
