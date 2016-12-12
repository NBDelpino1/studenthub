@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Attendance History</h2>
        <p>You are in index.blade</p>
        <table class="table">
            <thead>
            <tr>
                <th>Date</th>
                <th>Time</th>
                <th>Notes</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->created_at->format('m-d-Y') }}</td>
                    <td>{{ $task->created_at->format('g:i A')}}</td>
                    <td></td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection

