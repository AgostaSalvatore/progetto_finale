@extends('layouts.master')

@section('title', $softwarehouse->name)

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1>{{ $softwarehouse->name }}</h1>
                <a href="{{ route('softwarehouses.index') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Torna alle Software House
                </a>
            </div>
        </div>
    </div>

    <!-- Prima riga: Logo e Descrizione -->
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Logo</h5>
                    <img src="{{ asset('images/software_houses/' . $softwarehouse->logo) }}" alt="Logo" class="img-fluid" style="max-height: 150px;">
                </div>
            </div>
        </div>
        
        <div class="col-md-8">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Descrizione</h5>
                    <p class="card-text">{{ $softwarehouse->description }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Seconda riga: Informazioni -->
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Anno Fondazione</h5>
                    <p class="card-text">{{ $softwarehouse->founded_year }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Paese</h5>
                    <p class="card-text">{{ $softwarehouse->country }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Sito Web</h5>
                    <p class="card-text">
                        @if($softwarehouse->website)
                            <a href="{{ $softwarehouse->website }}" target="_blank">{{ $softwarehouse->website }}</a>
                        @else
                            Non disponibile
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Terza riga: Azioni -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Azioni</h5>
                    <div class="d-flex gap-2 flex-wrap">
                        <a href="{{ route('softwarehouses.edit', $softwarehouse->id) }}" class="btn btn-primary">
                            <i class="bi bi-pencil"></i> Modifica
                        </a>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="bi bi-trash"></i> Elimina
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
