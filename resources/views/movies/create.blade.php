@extends('layouts.app')

@section('title', 'Create a movie')

@section('content')
<h1>Create a movie</h1>

<form method="POST" action="/create">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Enter title">
        @include('partials.error-message', [ 'field' => 'title'])
    </div>

    <div class="form-group">
        <label for="director">Director</label>
        <input type="text" name="director" class="form-control" id="director" placeholder="Enter director">
        @include('partials.error-message', [ 'field' => 'director'])
    </div>

    <div class="form-group">
        <label for="genre">Genre</label>
        <input type="text" name="genre" class="form-control" id="genre" placeholder="Enter genre">
        @include('partials.error-message', [ 'field' => 'genre'])
    </div>

    <div class="form-group">
        <label for="release_year">Release year</label>
        <input type="number" name="release_year" class="form-control" id="release_year" placeholder="Enter release year">
        @include('partials.error-message', [ 'field' => 'release_year'])
    </div>

    <div class="form-group">
        <label for="storyline">Storyline</label>
        <textarea name="storyline" class="form-control" id="storyline" rows="5"></textarea>
        @include('partials.error-message', [ 'field' => 'storyline'])
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection