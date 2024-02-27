@extends('layouts.main-layout')
@section('head')
    <title>Create</title>
@endsection
@section('content')
    <h1 class="ms-3">NEW PROJECT:</h1>
    <form class="ms-3" action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')

        <label for="title">Title</label>
        <br>
        <input type="text" name="title">
        <br><br>

        <label for="description">Description</label>
        <br>
        <input type="text" name="description">
        <br><br>

        <label for="date">Date</label>
        <br>
        <input type="text" name="date">
        <br><br>

        <label for="type">Type</label>
        <br>
        <select name="type_id" id="type_id">
            @foreach ($types as $type)
                <option value="{{ $type -> id }}">
                    {{ $type -> name }}
                </option>
            @endforeach
        </select>
        <br><br>

        <label class="fw-bold" name="technology">Technology</label>
        <br>
        @foreach ($technologies as $technology)
            <input type="checkbox" name="technology_id[]" id="{{ 'technology_id' . $technology -> id}}" value="{{ $technology -> id}}">
            <label for="{{ 'techonology_id' . $technology -> id}}">{{ $technology -> name }}</label>
            <br>
        @endforeach
        <br><br>
        
        <label for="image">Image</label>
        <input type="file" name="image" id="image" accept="image/">
        <br><br>

        <input type="submit" value="CREATE">
    </form>
    
@endsection