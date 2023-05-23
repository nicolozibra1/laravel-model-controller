@extends('layouts.app')

@section('content')
    <section class="preload container d-flex flex-column justify-content-center align-items-center mt-5">
        <img src="/img/logo.png" alt="">
        <a href="{{route('movies.index')}}">ENTER</a>
    </section>
@endsection
