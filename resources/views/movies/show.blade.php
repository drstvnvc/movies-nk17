@extends("layouts.app")

@section("title", $movie->title)

@section("content")
<h1>{{$movie->title}}</h1>
<h3>{{$movie->director}}</h3>
<p>Genre: {{$movie->genre}}</p>
<p>Release year: {{$movie->release_year}}</p>
<hr />
<p>{{$movie->storyline}}</p>
@endsection