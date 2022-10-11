@extends('layouts.app')

@section('metaTitle', 'Pagina Movies')

@section('content')
    <div>
        <h1 class="title">Lista Movies</h1>
        <div class="container">
            <div class="grid">
                @foreach ($movies as $movie)
                    <div class="card">
                        <a href="">
                            <h2>Title: {{ $movie->title }}</h2>
                            <h3>Original Title: {{ $movie->original_title }}</h3>
                            <p>Nationality: {{ $movie->nationality }}</p>
                            <p>Data di uscita: {{ $movie->date }}</p>
                            <p>Vote: {{ $movie->vote }}</p>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
