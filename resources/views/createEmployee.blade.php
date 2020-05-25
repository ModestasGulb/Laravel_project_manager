@extends('layout')
@section('content')
@include('nav')
<div id="create-form">
    <form method="POST" action="{{ route('employee.store') }}">
        @csrf
        <label for="name">Employee's name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="name">Employees's surname:</label><br>
        <input type="text" id="surname" name="surname"><br>
        <label for="name">Employees's skills:</label><br>
        <input type="text" id="skills" name="skills"><br><br>
        <input type="submit" value="Submit" class="submit">
        <select name="project_id">
            <option value="" selected></option>
            @foreach($projects as $project)
            <option value="{{$project->id}}">{{$project->name}}</option>
            @endforeach
        </select>
    </form>
</div>
@endsection