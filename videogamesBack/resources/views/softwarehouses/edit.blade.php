@extends('layouts.master')

@section('title', 'Aggiungi Nuovo Videogioco')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1>Modifica Software House</h1>
                <a href="{{ route('softwarehouses.index') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Torna alla Collezione
                </a>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('softwarehouses.update', $softwareHouse->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                   id="name" name="name" value="{{ old('name', $softwareHouse->name) }}" required>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="description" class="form-label">Descrizione</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" 
                                      id="description" name="description" rows="4">{{ old('description', $softwareHouse->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="founded_year" class="form-label">Data di Fondazione</label>
                            <input type="date" class="form-control @error('founded_year') is-invalid @enderror" 
                                   id="founded_year" name="founded_year" value="{{ old('founded_year', $softwareHouse->founded_year) }}">
                            @error('founded_year')
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
                            <label for="website" class="form-label">Website</label>
                            <input type="text" class="form-control @error('website') is-invalid @enderror" 
                                   id="website" name="website" value="{{ old('website', $softwareHouse->website) }}">
                            @error('website')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="country" class="form-label">Paese</label>
                            <select class="form-select @error('country') is-invalid @enderror" 
                                    id="country" name="country">
                                <option value="">Seleziona un paese</option>
                                <option value="Afghanistan" {{ old('country', $softwareHouse->country) == 'Afghanistan' ? 'selected' : '' }}>Afghanistan</option>
                                <option value="Albania" {{ old('country', $softwareHouse->country) == 'Albania' ? 'selected' : '' }}>Albania</option>
                                <option value="Algeria" {{ old('country', $softwareHouse->country) == 'Algeria' ? 'selected' : '' }}>Algeria</option>
                                <option value="Argentina" {{ old('country', $softwareHouse->country) == 'Argentina' ? 'selected' : '' }}>Argentina</option>
                                <option value="Armenia" {{ old('country', $softwareHouse->country) == 'Armenia' ? 'selected' : '' }}>Armenia</option>
                                <option value="Australia" {{ old('country', $softwareHouse->country) == 'Australia' ? 'selected' : '' }}>Australia</option>
                                <option value="Austria" {{ old('country', $softwareHouse->country) == 'Austria' ? 'selected' : '' }}>Austria</option>
                                <option value="Azerbaijan" {{ old('country', $softwareHouse->country) == 'Azerbaijan' ? 'selected' : '' }}>Azerbaijan</option>
                                <option value="Bahrain" {{ old('country', $softwareHouse->country) == 'Bahrain' ? 'selected' : '' }}>Bahrain</option>
                                <option value="Bangladesh" {{ old('country', $softwareHouse->country) == 'Bangladesh' ? 'selected' : '' }}>Bangladesh</option>
                                <option value="Belarus" {{ old('country', $softwareHouse->country) == 'Belarus' ? 'selected' : '' }}>Belarus</option>
                                <option value="Belgium" {{ old('country', $softwareHouse->country) == 'Belgium' ? 'selected' : '' }}>Belgium</option>
                                <option value="Bolivia" {{ old('country', $softwareHouse->country) == 'Bolivia' ? 'selected' : '' }}>Bolivia</option>
                                <option value="Brazil" {{ old('country', $softwareHouse->country) == 'Brazil' ? 'selected' : '' }}>Brazil</option>
                                <option value="Bulgaria" {{ old('country', $softwareHouse->country) == 'Bulgaria' ? 'selected' : '' }}>Bulgaria</option>
                                <option value="Canada" {{ old('country', $softwareHouse->country) == 'Canada' ? 'selected' : '' }}>Canada</option>
                                <option value="Chile" {{ old('country', $softwareHouse->country) == 'Chile' ? 'selected' : '' }}>Chile</option>
                                <option value="China" {{ old('country', $softwareHouse->country) == 'China' ? 'selected' : '' }}>China</option>
                                <option value="Colombia" {{ old('country', $softwareHouse->country) == 'Colombia' ? 'selected' : '' }}>Colombia</option>
                                <option value="Croatia" {{ old('country', $softwareHouse->country) == 'Croatia' ? 'selected' : '' }}>Croatia</option>
                                <option value="Czech Republic" {{ old('country', $softwareHouse->country) == 'Czech Republic' ? 'selected' : '' }}>Czech Republic</option>
                                <option value="Denmark" {{ old('country', $softwareHouse->country) == 'Denmark' ? 'selected' : '' }}>Denmark</option>
                                <option value="Egypt" {{ old('country', $softwareHouse->country) == 'Egypt' ? 'selected' : '' }}>Egypt</option>
                                <option value="Estonia" {{ old('country', $softwareHouse->country) == 'Estonia' ? 'selected' : '' }}>Estonia</option>
                                <option value="Finland" {{ old('country', $softwareHouse->country) == 'Finland' ? 'selected' : '' }}>Finland</option>
                                <option value="France" {{ old('country', $softwareHouse->country) == 'France' ? 'selected' : '' }}>France</option>
                                <option value="Georgia" {{ old('country', $softwareHouse->country) == 'Georgia' ? 'selected' : '' }}>Georgia</option>
                                <option value="Germany" {{ old('country', $softwareHouse->country) == 'Germany' ? 'selected' : '' }}>Germany</option>
                                <option value="Greece" {{ old('country', $softwareHouse->country) == 'Greece' ? 'selected' : '' }}>Greece</option>
                                <option value="Hungary" {{ old('country', $softwareHouse->country) == 'Hungary' ? 'selected' : '' }}>Hungary</option>
                                <option value="Iceland" {{ old('country', $softwareHouse->country) == 'Iceland' ? 'selected' : '' }}>Iceland</option>
                                <option value="India" {{ old('country', $softwareHouse->country) == 'India' ? 'selected' : '' }}>India</option>
                                <option value="Indonesia" {{ old('country', $softwareHouse->country) == 'Indonesia' ? 'selected' : '' }}>Indonesia</option>
                                <option value="Iran" {{ old('country', $softwareHouse->country) == 'Iran' ? 'selected' : '' }}>Iran</option>
                                <option value="Ireland" {{ old('country', $softwareHouse->country) == 'Ireland' ? 'selected' : '' }}>Ireland</option>
                                <option value="Israel" {{ old('country', $softwareHouse->country) == 'Israel' ? 'selected' : '' }}>Israel</option>
                                <option value="Italy" {{ old('country', $softwareHouse->country) == 'Italy' ? 'selected' : '' }}>Italy</option>
                                <option value="Japan" {{ old('country', $softwareHouse->country) == 'Japan' ? 'selected' : '' }}>Japan</option>
                                <option value="Jordan" {{ old('country', $softwareHouse->country) == 'Jordan' ? 'selected' : '' }}>Jordan</option>
                                <option value="Kazakhstan" {{ old('country', $softwareHouse->country) == 'Kazakhstan' ? 'selected' : '' }}>Kazakhstan</option>
                                <option value="Latvia" {{ old('country', $softwareHouse->country) == 'Latvia' ? 'selected' : '' }}>Latvia</option>
                                <option value="Lithuania" {{ old('country', $softwareHouse->country) == 'Lithuania' ? 'selected' : '' }}>Lithuania</option>
                                <option value="Malaysia" {{ old('country', $softwareHouse->country) == 'Malaysia' ? 'selected' : '' }}>Malaysia</option>
                                <option value="Mexico" {{ old('country', $softwareHouse->country) == 'Mexico' ? 'selected' : '' }}>Mexico</option>
                                <option value="Netherlands" {{ old('country', $softwareHouse->country) == 'Netherlands' ? 'selected' : '' }}>Netherlands</option>
                                <option value="New Zealand" {{ old('country', $softwareHouse->country) == 'New Zealand' ? 'selected' : '' }}>New Zealand</option>
                                <option value="Norway" {{ old('country', $softwareHouse->country) == 'Norway' ? 'selected' : '' }}>Norway</option>
                                <option value="Pakistan" {{ old('country', $softwareHouse->country) == 'Pakistan' ? 'selected' : '' }}>Pakistan</option>
                                <option value="Peru" {{ old('country', $softwareHouse->country) == 'Peru' ? 'selected' : '' }}>Peru</option>
                                <option value="Philippines" {{ old('country', $softwareHouse->country) == 'Philippines' ? 'selected' : '' }}>Philippines</option>
                                <option value="Poland" {{ old('country', $softwareHouse->country) == 'Poland' ? 'selected' : '' }}>Poland</option>
                                <option value="Portugal" {{ old('country', $softwareHouse->country) == 'Portugal' ? 'selected' : '' }}>Portugal</option>
                                <option value="Romania" {{ old('country', $softwareHouse->country) == 'Romania' ? 'selected' : '' }}>Romania</option>
                                <option value="Russia" {{ old('country', $softwareHouse->country) == 'Russia' ? 'selected' : '' }}>Russia</option>
                                <option value="Saudi Arabia" {{ old('country', $softwareHouse->country) == 'Saudi Arabia' ? 'selected' : '' }}>Saudi Arabia</option>
                                <option value="Serbia" {{ old('country', $softwareHouse->country) == 'Serbia' ? 'selected' : '' }}>Serbia</option>
                                <option value="Singapore" {{ old('country', $softwareHouse->country) == 'Singapore' ? 'selected' : '' }}>Singapore</option>
                                <option value="Slovakia" {{ old('country', $softwareHouse->country) == 'Slovakia' ? 'selected' : '' }}>Slovakia</option>
                                <option value="Slovenia" {{ old('country', $softwareHouse->country) == 'Slovenia' ? 'selected' : '' }}>Slovenia</option>
                                <option value="South Africa" {{ old('country', $softwareHouse->country) == 'South Africa' ? 'selected' : '' }}>South Africa</option>
                                <option value="South Korea" {{ old('country', $softwareHouse->country) == 'South Korea' ? 'selected' : '' }}>South Korea</option>
                                <option value="Spain" {{ old('country', $softwareHouse->country) == 'Spain' ? 'selected' : '' }}>Spain</option>
                                <option value="Sweden" {{ old('country', $softwareHouse->country) == 'Sweden' ? 'selected' : '' }}>Sweden</option>
                                <option value="Switzerland" {{ old('country', $softwareHouse->country) == 'Switzerland' ? 'selected' : '' }}>Switzerland</option>
                                <option value="Taiwan" {{ old('country', $softwareHouse->country) == 'Taiwan' ? 'selected' : '' }}>Taiwan</option>
                                <option value="Thailand" {{ old('country', $softwareHouse->country) == 'Thailand' ? 'selected' : '' }}>Thailand</option>
                                <option value="Turkey" {{ old('country', $softwareHouse->country) == 'Turkey' ? 'selected' : '' }}>Turkey</option>
                                <option value="Ukraine" {{ old('country', $softwareHouse->country) == 'Ukraine' ? 'selected' : '' }}>Ukraine</option>
                                <option value="United Arab Emirates" {{ old('country', $softwareHouse->country) == 'United Arab Emirates' ? 'selected' : '' }}>United Arab Emirates</option>
                                <option value="United Kingdom" {{ old('country', $softwareHouse->country) == 'United Kingdom' ? 'selected' : '' }}>United Kingdom</option>
                                <option value="United States" {{ old('country', $softwareHouse->country) == 'United States' ? 'selected' : '' }}>United States</option>
                                <option value="Uruguay" {{ old('country', $softwareHouse->country) == 'Uruguay' ? 'selected' : '' }}>Uruguay</option>
                                <option value="Venezuela" {{ old('country', $softwareHouse->country) == 'Venezuela' ? 'selected' : '' }}>Venezuela</option>
                                <option value="Vietnam" {{ old('country', $softwareHouse->country) == 'Vietnam' ? 'selected' : '' }}>Vietnam</option>
                            </select>
                            @error('country')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
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
