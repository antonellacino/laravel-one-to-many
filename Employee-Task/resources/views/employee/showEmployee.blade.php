@extends('Layouts.main_layout')

@section('content')
<div class="flexColumn">

    Name: {{$employee->firstname}}<br>
    Lastaname: {{$employee->lastname}}<br>
    Date of Birth: {{$employee->dateOfBirth}}<br>
    Role: {{$employee->role}}
    @foreach($employee->locations as $location)
        Location: {{$location->state}}<br>
    @endforeach

</div>


@endsection
