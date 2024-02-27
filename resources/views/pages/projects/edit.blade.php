@extends('layouts.main-layout')
@section('head')
    <title>Edit</title>
@endsection
@section('content')
    <h1 class="ms-3">EDIT PROJECT:</h1>
    <form class="ms-3" action="{{ route('project.update', $project -> id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="title">Title</label>
        <br>
        <input type="text" name="title" value="{{ $project -> title }}">
        <br><br>

        <label for="description">Description</label>
        <br>
        <input type="text" name="description" value="{{ $project -> description }}">
        <br><br>

        <label for="date">Date</label>
        <br>
        <input type="text" name="date" value="{{ $project -> date }}">
        <br><br>

        <label for="type">Type</label>
        <br>
        <select name="type_id" id="type_id">
            @foreach ($types as $type)
                <option value="{{ $type -> id }}"
                    @if ($project -> type -> id == $type -> id)
                       selected
                    @endif 
                >
                    {{ $type -> name }}
                </option>
            @endforeach
        </select>
        <br><br>

        <label class="fw-bold" name="technology">Technology</label>
        <br>
        @foreach ($technologies as $technology)
            <input type="checkbox" 
                    name="technology_id[]" id="{{ 'technology_id' . $technology -> id}}" 
                    value="{{ $technology -> id}}"
                   @foreach ($project -> technologies as $project_technology)
                       @if ($project_technology -> id == $technology -> id)
                         checked  
                       @endif
                   @endforeach
            >
            <label for="{{ 'techonology_id' . $technology -> id}}">
                {{ $technology -> name }}
            </label>
            <br>
        @endforeach
        <br><br>

        <label for="image">Image</label>
        <input type="file" name="image" id="image" accept="image/">
        <br><br>
        

        <input type="submit" value="EDIT">
    </form>
    
@endsection