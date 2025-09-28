@extends('layouts.master')

@section('title', 'VideoGames Collection')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-between align-items-center">
            <h1 class="mb-4">Software Houses</h1>
            <a href="{{ route('softwarehouses.create') }}" class="btn btn-primary mb-4">
                <i class="bi bi-plus-circle"></i> Aggiungi Nuova Software House
            </a>
        </div>
    </div>
    
    <div class="row">
        @foreach($genres as $genre)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">{{ $genre->name }}</h5>
                    <div class="genre-info">
                        <small class="text-muted">Genere:</small>
                        <span class="genre-color" style="background-color: {{ $genre->color }}"></span>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('genres.show', $genre) }}" class="btn btn-primary">
                        <i class="bi bi-eye"></i> Visualizza
                    </a>
                    <a href="{{ route('genres.edit', $genre) }}" class="btn btn-warning">
                        <i class="bi bi-pencil"></i> Modifica
                    </a>
                    <form action="{{ route('genres.destroy', $genre) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="bi bi-trash"></i> Elimina
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
