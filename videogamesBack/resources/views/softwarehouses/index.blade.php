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
        @foreach($softwareHouses as $softwareHouse)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">{{ $softwareHouse->name }}</h5>
                    <p class="card-text">{{ Str::words($softwareHouse->description, 10, '...') }}</p>
                    <div class="software-house-info">
                        <small class="text-muted">Software House:</small>
                        <img src="{{ asset('images/software_houses/' . $softwareHouse->logo) }}" 
                             alt="{{ $softwareHouse->name }}" 
                             class="software-house-logo large">
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('softwarehouses.show', $softwareHouse) }}" class="btn btn-primary">
                        <i class="bi bi-eye"></i> Visualizza
                    </a>
                    <a href="{{ route('softwarehouses.edit', $softwareHouse) }}" class="btn btn-warning">
                        <i class="bi bi-pencil"></i> Modifica
                    </a>
                    <form action="{{ route('softwarehouses.destroy', $softwareHouse) }}" method="POST" class="d-inline">
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
