@extends('layouts.master')

@section('title', 'VideoGames Collection')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-between align-items-center">
            <h1 class="mb-4">Software Houses</h1>
            <a href="{{ route('genres.create') }}" class="btn btn-primary mb-4">
                <i class="bi bi-plus-circle"></i> Aggiungi Nuovo Genere
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
                        <small class="text-muted">Colore tag:</small>
                        <span class="genre-color" style="background-color: {{ $genre->color }}">{{ $genre->color }}</span>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('genres.show', $genre) }}" class="btn btn-primary">
                        <i class="bi bi-eye"></i> Visualizza
                    </a>
                    <a href="{{ route('genres.edit', $genre) }}" class="btn btn-warning">
                        <i class="bi bi-pencil"></i> Modifica
                    </a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $genre->id }}">
                        <i class="bi bi-trash"></i> Elimina
                    </button>
                </div>

                <!-- Modal di conferma eliminazione -->
                <div class="modal fade" id="deleteModal-{{ $genre->id }}" tabindex="-1" aria-labelledby="deleteModalLabel-{{ $genre->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="deleteModalLabel-{{ $genre->id }}">Elimina il genere</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Vuoi cancellare il genere <strong>{{ $genre->name }}</strong> dal database?
                                <br><small class="text-muted">Questa azione non può essere annullata.</small>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                                <form action="{{ route('genres.destroy', $genre) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="bi bi-trash"></i> Elimina Definitivamente
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
