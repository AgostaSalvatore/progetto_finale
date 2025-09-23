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
            <div class="card">
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
                        <form action="{{ route('videogames.destroy', $videogame) }}" method="POST" onsubmit="return confirm('Sei sicuro di voler eliminare questo videogioco?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger w-100">
                                <i class="bi bi-trash"></i> Elimina
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
