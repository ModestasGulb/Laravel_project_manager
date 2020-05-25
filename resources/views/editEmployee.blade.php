@extends('layout')
@section('content')
@include('nav')
<div id="create-form">
    <form action="{{ route('employee.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')
            <label for="name">Employee's name:</label><br>
            <input type="text" name="name" value="{{ $employee->name }}" /><br>
            <label for="surname">Employee's surname:</label><br>
            <input type="text" name="surname" value="{{ $employee->surname }}" /><br>
            <label for="skills">Skills:</label><br>
            <textarea name="skills">{{ $employee->skills }}</textarea><br>
            <select name="project_id">
                <option value=""></option>
                @foreach($projects as $project)
                <option value="{{$project->id}}" {{$project->id == $employee->project_id ? "selected" : ""}}>{{$project->name}}</option>
                @endforeach
            </select><br>
            <button type="submit" class="submit">Update</button>
            
    </form>
</div>
@endsection