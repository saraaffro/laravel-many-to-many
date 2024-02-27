@extends('layouts.main-layout')
@section('head')
    <title>Projects</title>
@endsection
@section('content')
    <h1 class="ms-3">PROJECT: {{ $project -> title}} </h1>
    
    <h2 class="ms-3">Title: {{ $project -> title}}</h2>
    <p class="ms-3">Description: {{ $project -> description }}</p>
    <p class="ms-3">{{$project -> date}}</p>
    @foreach($project -> technologies as $technology)
        <p class="ms-3">Technology: {{$technology -> name}}</p>
    @endforeach
    <p class="ms-3">Type: {{ $project -> type -> name }}</p>
    <img class="ms-3" width="150px" src="{{ asset('storage/' . $project -> image)}}" alt="img">
@endsection 
