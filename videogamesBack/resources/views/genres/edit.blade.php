@extends('layouts.master')

@section('title', 'Modifica Genere')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="{{ route('genres.update', $genre) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Nome del genere</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $genre->name) }}" required>
                </div>
                <div class="mb-3">
                    <label for="color" class="form-label">Colore del genere</label>
                    <input type="color" class="form-control form-control-color" id="color" name="color" value="{{ old('color', $genre->color) }}" required>
                </div>
                
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-check-circle"></i> Modifica Genere
                </button>
            </form>
            
        </div>
    </div>
</div>
@endsection