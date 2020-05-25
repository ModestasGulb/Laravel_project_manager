@extends('layout')
@section('content')
@include('nav')
<div id="create-form">
    <form method="post" action="{{ route('project.update', $project->id) }}">
            @csrf
            @method('PUT')
            <label for="name">Project name:</label><br>
            <input type="text" name="name" value="{{ $project->name }}" /><br>
            <label for="description">Project description :</label><br>
            <textarea name="description">{{ $project->description }}</textarea><br>
        <button type="submit" class="submit">Update</button>
    </form>
</div>
@endsection