@extends('layouts.main-layout')
@section('head')
    <title>Projects</title>
@endsection
@section('content')
    <h1 class="ms-3">PROJECTS: </h1>
    <a class="ms-3" href="{{ route('project.create') }}">CREATE</a>
    <ul>
        @foreach ($projects as $project)
            <li>
                <strong>Title: {{$project -> title}}</strong>
                <p>Description: {{$project -> description}}</p>
                <p>{{$project -> date}}</p>
                <p>Type: {{$project -> type -> name}}</p>
                @foreach($project -> technologies as $technology)
                    <p>Technology: {{$technology -> name}}</p>
                @endforeach
                <a href="{{ route('project.edit', $project -> id) }}">EDIT</a>
            </li>
            <br>
        @endforeach
    </ul>
@endsection
