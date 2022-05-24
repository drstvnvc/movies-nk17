@extends("layouts.app")

@section("title", "Movies")

@section("content")
<h1>Movies</h1>
@foreach($movies as $movie)
<div>
    <h3><a href="/movies/{{$movie->id}}">{{$movie->title}}</a></h3>
    <p>{{$movie->storyline}}</p>
</div>
@endforeach
@endsection
