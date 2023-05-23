@extends('layouts.app')

@section('content')
<div class="background">
    <section class="container d-flex flex-column align-items-center" id="movies-index">
        <div class="box-logo">
            <img src="/img/logo.png" alt="">
        </div>
        <div class="row d-flex flex-wrap">
            @foreach ($movies as $movie)
            <div class="col-2">
                <a href="{{route('movies.show', ['id' => $movie->id])}}">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{$movie->image}}" alt="">
                        </div>
                        <div class="card-body">
                            <h6 class="text-center">{{$movie ->title}}</h6>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </section>
</div>
@endsection
