@extends('layout')
@section('content')
@include('nav')

<div class="show">
    <h1>{{$project->name}}</h1>
    <hr>
    <div>
        <h2>Project description</h2>
        <p>{{$project->description}}</p>
        <hr>
        <h2>Employees</h2>
        <p>
            <?php $i = 0; ?>
            @foreach($project->employees as $employee)
            @if($i == count($project->employees) - 1)
            {{$employee->name . ' ' . $employee->surname}}
            @else
            {{$employee->name . ' ' . $employee->surname . ' ,'}}
            @endif
            <?php $i++; ?>
            @endforeach
        </p>
        <hr>
        <form action="{{ route('project.edit', $project->id)}}">
            @csrf
            @method('GET')
            <button type="submit" class="edit">Edit</button>
        </form>
        <form action="{{route('project.destroy', $project->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="delete">Delete</button>
        </form>
    </div>
</div>

@endsection