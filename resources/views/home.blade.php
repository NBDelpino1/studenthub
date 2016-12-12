@extends('layouts.app')

@section('content')
<div class="container">
<div class="jumbotron text-center">
        <h1>Home</h1>
        <p>You are in home.blade</p>
    </div>

    <p><a class="btn btn-primary btn-lg" href="{{route('records.create')}}" role="button"><span class="glyphicon glyphicon-plus-sign"></span>Attendance</a></p>

</div>
@endsection
