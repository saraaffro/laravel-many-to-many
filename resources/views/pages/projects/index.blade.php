@extends('layouts.main-layout')
@section('head')
    <title>Projects</title>
@endsection
@section('content')
    <h1>PROJECTS: </h1>
    <ul>
        @foreach ($projects as $project)
            <li>
                <strong>Title: {{$project -> title}}</strong>
                <p>Description: {{$project -> description}}</p>
                <p>{{$project -> date}}</p>
                <p>Type: {{$project -> type -> name}}</p>
            </li>
        @endforeach
    </ul>
@endsection
