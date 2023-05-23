@extends('layouts.app')

@section('content')
    <div class="box-logo m-auto" id="show-page">
        <img src="/img/logo.png" alt="">
    </div>
    <section class="container d-flex flex-column align-items-between mt-5" id="show-movie">
        <div class="row d-flex">
            <div class="col-6 d-flex justify-content-center w-50">
                <div class="box-image">
                    <img src="{{$movie->image}}" alt="{{$movie->title}}">
                </div>
            </div>
            <div class="col-6 w-50 d-flex flex-column gap-3">
                <h1 class="text-uppercase fw-bold">{{$movie->title}}</h1>
                <hr>
                <span><span class="fw-lighter">Original title: </span>{{$movie->original_title}}</span>
                <span><span class="fw-lighter">Nationality: </span>{{$movie->nationality}}</span>
                <span><span class="fw-lighter">Date release: </span>{{$movie->date}}</span>
                <span><span class="fw-lighter">Vote: </span>{{$movie->vote}}</span>
            </div>
        </div>
        <img class="art-bg" src="/img/popcorn.png" alt="">
    </section>
@endsection
