@extends('layouts.app')

@section('content')
<div class="container">
<div class="jumbotron text-center">
        <h1>Home</h1>
        <p>You are in home.blade</p>
    </div>

    <p><a class="btn btn-primary btn-lg" href="{{route('records.create')}}" role="button">Attendance</a></p>


    <p><a class="btn btn-primary btn-lg" href="{{route('assignments.create')}}" role="button">Assignments</a></p>

</div>
@endsection
