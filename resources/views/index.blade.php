@extends('layout')
@section('content')
<div id="index">
    <div>
        <h1 id="page-title">Laravel project manager</h1>
        <div class="flex-container-index">
            <div class="index-sircle">
                <a class="index-links" href="/employee">Employees</a>
            </div>
            <div class="index-sircle">
                <a class="index-links" href="/project">Projects</a>
            </div>
        </div>
    </div>
</div>
@endsection