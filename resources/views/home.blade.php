@extends('layouts.app')

@section('content')
    <section class="container">
        <h1>Home Page</h1>
        <a href="{{route('movies.index')}}">Vai alla lista dei film</a>
    </section>
@endsection
