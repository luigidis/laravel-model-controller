@extends('layouts.app')

@section('metaTitle', 'Pagina Movies')
    
@section('content')
<div>
    @foreach ($movies as $movie)
    <h1>{{ $movie->title }}</h1>
    @endforeach
</div>
@endsection