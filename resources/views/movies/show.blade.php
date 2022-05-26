@extends("layouts.app")

@section("title", $movie->title)

@section("content")
<h1>{{$movie->title}}</h1>
<h3>{{$movie->director}}</h3>
<p>Genre: <a href="/genres/{{$movie->genre}}">{{$movie->genre}}</a></p>
<p>Release year: {{$movie->release_year}}</p>
<hr />
<p>{{$movie->storyline}}</p>

<div>
    <h4>Comments</h4>
    @foreach($movie->comments as $comment) 
    <div>
        <p>{{$comment->content}}</p>
        <small>Commented at: {{$comment->created_at}}</small>
    </div>
    @endforeach
</div>
@endsection