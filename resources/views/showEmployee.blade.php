@extends('layout')
@section('content')
@include('nav')

<div class="show">
    <h1>{{$employee->name . ' ' . $employee->surname}}</h1>
    <hr>
    <div>
        <h2>Skills</h2>
        <p>{{$employee->skills}}</p>
        <hr>
        <h2>Assigned project</h2>
        @if($employee->project_id != NULL)
        <p>{{$employee->project->name}}</p>
        @else
        <p>This employee has no assigned project</p>
        @endif
        <hr>
            <form action="{{ route('employee.edit', $employee->id) }}">
                @csrf
                @method('GET')
                <button type="submit" class="edit">Edit</button>
            </form>
            <form action="{{ route('employee.destroy', $employee->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete">Delete</button>
            </form>
    </div>
    @endsection