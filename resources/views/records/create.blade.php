@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Attendance</h1>
        <p>You are in create.blade</p>
    </div>


    <form class="form-inline" method="post" action="{{route('records.store')}}">
        {{csrf_field()}}
        <button name="notes" type="submit" class="btn btn-primary">Login</button>
    </form>


@endsection