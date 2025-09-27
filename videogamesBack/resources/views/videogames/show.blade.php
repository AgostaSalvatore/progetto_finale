@extends('layouts.master')

@section('title', $videogame->title)

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1>{{ $videogame->title }}</h1>
                <a href="{{ route('videogames.index') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Torna alla Collezione
                </a>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-8">
            <div class="card border-dark">
                <div class="card-body">
                    <h5 class="card-title">Descrizione</h5>
                    <p class="card-text">{{ $videogame->description }}</p>
                    
                    <hr>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Prezzo:</strong> {{ $videogame->price }}€</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Data di aggiunta:</strong> {{ $videogame->created_at->format('d/m/Y') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Azioni</h5>
                    <div class="d-grid gap-2">
                        <a href="{{ route('videogames.edit', $videogame) }}" class="btn btn-primary">
                            <i class="bi bi-pencil"></i> Modifica
                        </a>
                        <button type="button" class="btn btn-danger" data-bs-toggle='modal' data-bs-target='#exampleModal'>
                            <i class="bi bi-trash"></i> Elimina
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-8">
            <div class="card border-dark">
                <div class="card-body">
                    <h5 class="card-title">Software House</h5>
                    <p class="card-text">Nome: {{ $videogame->softwareHouse->name }}</p>
                    <p class="card-text">Descrizione: {{ $videogame->softwareHouse->description }}</p>
                    <p class="card-text"> Data di creazione: {{ $videogame->softwareHouse->created_at->format('d/m/Y') }}</p>
                    <p>
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
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina il videogioco</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Vuoi cancellare <strong>"{{ $videogame->title }}"</strong> dal database?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
              <form action="{{route('videogames.destroy' , $videogame)}}" method="POST">
                 @csrf
                 @method('DELETE')
                 <input type="submit" class="btn mx-2 btn-outline-danger" value="Elimina Definitivamente"></a>
              </form>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection
