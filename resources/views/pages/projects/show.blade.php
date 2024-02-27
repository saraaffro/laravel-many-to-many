@extends('layouts.main-layout')
@section('head')
    <title>Projects</title>
@endsection
@section('content')
    <h1 class="ms-3">PROJECT: {{ $project -> title}} </h1>
    
    <h2 class="ms-3">{{ $project -> title}}</h2>
    <p class="ms-3">{{ $project -> description }}</p>
    <p class="ms-3">{{$project -> date}}</p>
    <img class="ms-3" width="150px" src="{{ asset('storage/' . $project -> image)}}" alt="img">
@endsection 
