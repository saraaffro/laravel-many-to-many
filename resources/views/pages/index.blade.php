@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <ul>
        @foreach ($types as $type)
        <li>
            <h2>TYPE: {{$type -> name}}</h2>
            <h3>PROJECTS</h3>
            <ul>
                @foreach ($type -> projects as $project)
                    <li>
                        <strong>{{$project -> title}}</strong>
                        <p>{{$project -> description}}</p>
                        <p>{{$project -> date}}</p>
                    </li>
                @endforeach
            </ul>
        </li>
        <br><br>
        @endforeach
    </ul>
@endsection
