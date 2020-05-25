@extends('layout')
@section('content')
@include('nav')

<div id="create-form">
<form method="POST" action="{{ route('project.store') }}">
    @csrf
    <label for="name">Project name:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="text">Description:</label><br>
    <input type="text" id="description" name="description"><br><br>
    <input type="submit" value="Submit" class="submit">
</form>
</div>
@endsection