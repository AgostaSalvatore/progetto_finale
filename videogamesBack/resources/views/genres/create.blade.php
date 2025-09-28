@extends('layouts.master')

@section('title', 'Aggiungi Nuovo Genere')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="{{ route('genres.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nome del genere</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="color" class="form-label">Colore del genere</label>
                    <input type="color" class="form-control form-control-color" id="color" name="color" required>
                </div>
                
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i> Aggiungi Genere
                </button>
            </form>
        </div>
    </div>
</div>
@endsection