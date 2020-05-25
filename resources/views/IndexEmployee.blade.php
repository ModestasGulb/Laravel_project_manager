@extends('layout')
@section('content')
@include('nav')
@if (session('status'))
<div class="status">{{ session('status') }}</div>
@endif
<table>
    <thead>
        <tr>
            <th class="cell-no-e">No.</th>
            <th class="cell-name-e">Name</th>
            <th class="cell-name-e">Surname</th>
            <th class="cell-name-e">Assigned project</th>
            <th class="cell-actions-e">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 0; ?>
        @foreach($employees as $employee)
        <?php $no++; ?>
        <tr>
            <td class="cell-no-e">{{ $no }}</td>
            <td class="name-e">{{ $employee->name }}</td>
            <td class="cell-name-e">{{ $employee->surname }}</td>
            <td class="cell-name-e">{{ $employee->project['name'] }}</td>
            <td class="cell-actions-e">
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
                <form action="{{ route('employee.show', $employee->id) }}" method="post">
                    @csrf
                    @method('GET')
                    <button type="submit" class="view">View</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="create"><a href="{{ route('employee.create')}}">Create New Employee</a></div>
@endsection