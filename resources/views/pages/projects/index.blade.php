@extends('layouts.main-layout')
@section('head')
    <title>Projects</title>
@endsection
@section('content')
    <h1 class="ms-3">PROJECTS: </h1>
    <a class="ms-3" href="{{ route('project.create') }}">CREATE</a>
    <br><br>
    <ul>
        @foreach ($projects as $project)
            <li>
                <a href="{{ route('project.show', $project -> id) }}">
                    <strong>Title: {{$project -> title}}</strong>
                </a> 
                <a class="ms-3" href="{{ route('project.edit', $project -> id) }}">EDIT</a>
            </li>
            <br>
        @endforeach
    </ul>
@endsection
