@extends('layouts.master')

@section('title', $softwareHouse->name)

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1>{{ $softwareHouse->name }}</h1>
                <a href="{{ route('softwarehouses.index') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Torna alle Software House
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Descrizione</h5>
                    <p class="card-text">{{ $softwareHouse->description }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Azioni</h5>
                    <div class="d-grid gap-2">
                        <a href="{{ route('softwarehouses.edit', $softwareHouse) }}" class="btn btn-primary">
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
