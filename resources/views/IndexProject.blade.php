@extends('layout')
@section('content')
@include('nav')
@if (session('status'))
<div class="status"><b>{{ session('status') }}</b></div>
@endif
<table>
    <thead>
        <tr>
            <th class="cell-no-p">No.</td>
            <th class="cell-name-p">Project name</td>
            <th class="cell-employees-p">Employees</td>
            <th class="cell-actions-p">Action</td>
        </tr>
    </thead>
    <tbody>
        <?php $no = 0; ?>
        @foreach($projects as $project)
        <?php $no++; ?>
        <tr>
            <td class="cell-no-p">{{$no}}</td>
            <td class="cell-name-p">{{$project->name}}</td>
            <td class="cell-employees-p">
                <?php $i = 0; ?>
                @foreach($project->employees as $employee)
                @if($i == count($project->employees) - 1)
                {{$employee->name . ' ' . $employee->surname}}
                @else
                {{$employee->name . ' ' . $employee->surname . ' ,'}}
                @endif
                <?php $i++; ?>
                @endforeach
            </td>
            <td class="cell-actions-p">
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
                <form action="{{ route('project.show', $project->id) }}" method="post">
                    @csrf
                    @method('GET')
                    <button type="submit" class="view">View</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="create"><a href="{{ route('project.create')}}">Create New Project</a></div>
@endsection