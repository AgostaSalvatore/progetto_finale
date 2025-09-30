@extends('layouts.master')

@section('title', 'VideoGames Collection')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-between align-items-center">
            <h1 class="mb-4">La Mia Collezione di Videogiochi</h1>
            <a href="{{ route('videogames.create') }}" class="btn btn-primary mb-4">
                <i class="bi bi-plus-circle"></i> Aggiungi Nuovo Videogioco
            </a>
        </div>
    </div>
    
    <div class="row">
        @foreach($videogames as $videogame)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">{{ $videogame->title }}</h5>
                    <p class="card-text">{{ Str::words($videogame->description, 10, '...') }}</p>
                    <div class="software-house-info">
                        <small class="text-muted">Software House:</small>
                        <img src="{{ asset('images/software_houses/' . $videogame->softwareHouse->logo) }}" 
                             alt="{{ $videogame->softwareHouse->name }}" 
                             class="software-house-logo large">
                    </div>
                    <p class="mt-4">
                        <strong>Genere:</strong>
                        @forelse ($videogame->genres as $genre)
                            <span class="badge me-2" style="background-color: {{ $genre->color }}">
                                {{ $genre->name }}
                            </span>
                        @empty
                            <span class="text-muted">Nessun genere associato</span>
                        @endforelse
                    </p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('videogames.show', $videogame) }}" class="btn btn-primary">
                        <i class="bi bi-eye"></i> Visualizza
                    </a>
                    <a href="{{ route('videogames.edit', $videogame) }}" class="btn btn-warning">
                        <i class="bi bi-pencil"></i> Modifica
                    </a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $videogame->id }}">
                        <i class="bi bi-trash"></i> Elimina
                    </button>
                </div>

                <div class="modal fade" id="exampleModal-{{ $videogame->id }}" tabindex="-1" aria-labelledby="exampleModalLabel-{{ $videogame->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel-{{ $videogame->id }}">Elimina il videogioco</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Vuoi cancellare <strong>{{ $videogame->title }}</strong> dal database?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                          <form action="{{route('videogames.destroy' , $videogame)}}" method="POST">
                             @csrf
                             @method('DELETE')
                             <input type="submit" class="btn mx-2 btn-outline-danger" value="Elimina Definitivamente">
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
