@extends('layouts.master')

@section('title', 'Aggiungi Nuovo Videogioco')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1>Modifica Videogioco</h1>
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
                    <form action="{{ route('videogames.update', $videogame->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                   id="title" name="title" value="{{ old('title', $videogame->title) }}" required>
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="description" class="form-label">Descrizione</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" 
                                      id="description" name="description" rows="4">{{ old('description', $videogame->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="release_date" class="form-label">Data di Rilascio</label>
                            <input type="date" class="form-control @error('release_date') is-invalid @enderror" 
                                   id="release_date" name="release_date" value="{{ old('release_date', $videogame->release_date) }}">
                            @error('release_date')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Prezzo</label>
                            <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" 
                                id="price" name="price" value="{{ old('price', $videogame->price) }}" min="0">
                            @error('price')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="software_house_id" class="form-label">Software House</label>
                            <select class="form-select" 
                                    id="software_house_id" name="software_house_id">
                                <option value="">Seleziona una Software House</option>
                                @foreach($softwareHouses as $softwareHouse)
                                    <option value="{{ $softwareHouse->id }}" {{ old('software_house_id', $videogame->software_house_id) == $softwareHouse->id ? 'selected' : '' }}>
                                        {{ $softwareHouse->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="genre" class="form-label">Genere</label>
                            <div class="form-check d-flex flex-wrap">
                                @foreach ($genres as $genre)
                                <div class="tag me-2">
                                    <input type="checkbox" name="genre[]" id="tag-{{ $genre->id }}" value="{{ $genre->id }}" {{$videogame->genres->contains($genre->id) ? 'checked' : ''}}>
                                    <label for="tag-{{ $genre->id }}">{{ $genre->name }}</label>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="cover_image" class="form-label">Immagine</label>
                            <input id="cover_image" type="file" class="form-control border-dark" name="cover_image">
                            <div class="text-center">
                                @if($videogame->cover_image)
                                    <img src="{{asset('storage/' . $videogame->cover_image)}}" alt="{{ $videogame->title }} cover image" class="img-fluid w-25 mt-2">
                                @endif
                            </div>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-plus-circle"></i> Modifica Videogioco
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
