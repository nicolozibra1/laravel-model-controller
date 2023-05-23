@extends('layouts.app')

@section('content')
    <section class="container">
        <h1>{{$movie->title}}</h1>
        <span>{{$movie->original_title}}</span>
        <span>{{$movie->nationality}}</span>
        <span>{{$movie->date}}</span>
        <span>{{$movie->vote}}</span>
        <img src="{{$movie->image}}" alt="{{$movie->title}}">

    </section>
@endsection
