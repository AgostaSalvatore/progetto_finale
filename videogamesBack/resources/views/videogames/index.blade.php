@extends('layouts.master')

@section('title', 'VideoGames Collection')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-4">La Mia Collezione di Videogiochi</h1>
        </div>
    </div>
    
    <div class="row">
        @foreach($videogames as $videogame)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">{{ $videogame->title }}</h5>
                    <p class="card-text">{{ $videogame->description }}</p>
                    <p class="card-text"><small class="text-muted">{{ $videogame->genre }}</small></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
