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
    
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('softwarehouses.update', $softwarehouse->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                        
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" 
                               id="name" name="name" value="{{ old('name', $softwarehouse->name) }}" required>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="description" class="form-label">Descrizione</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" 
                                      id="description" name="description" rows="4">{{ old('description', $softwarehouse->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="founded_year" class="form-label">Data di Fondazione</label>
                            <input type="date" class="form-control @error('founded_year') is-invalid @enderror" 
                                   id="founded_year" name="founded_year" value="{{ old('founded_year', $softwarehouse->founded_year) }}">
                            @error('founded_year')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="website" class="form-label">Website</label>
                            <input type="text" class="form-control @error('website') is-invalid @enderror" 
                                   id="website" name="website" value="{{ old('website', $softwarehouse->website) }}">
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
                                <option value="Afghanistan" {{ old('country', $softwarehouse->country) == 'Afghanistan' ? 'selected' : '' }}>Afghanistan</option>
                                <option value="Albania" {{ old('country', $softwarehouse->country) == 'Albania' ? 'selected' : '' }}>Albania</option>
                                <option value="Algeria" {{ old('country', $softwarehouse->country) == 'Algeria' ? 'selected' : '' }}>Algeria</option>
                                <option value="Argentina" {{ old('country', $softwarehouse->country) == 'Argentina' ? 'selected' : '' }}>Argentina</option>
                                <option value="Armenia" {{ old('country', $softwarehouse->country) == 'Armenia' ? 'selected' : '' }}>Armenia</option>
                                <option value="Australia" {{ old('country', $softwarehouse->country) == 'Australia' ? 'selected' : '' }}>Australia</option>
                                <option value="Austria" {{ old('country', $softwarehouse->country) == 'Austria' ? 'selected' : '' }}>Austria</option>
                                <option value="Azerbaijan" {{ old('country', $softwarehouse->country) == 'Azerbaijan' ? 'selected' : '' }}>Azerbaijan</option>
                                <option value="Bahrain" {{ old('country', $softwarehouse->country) == 'Bahrain' ? 'selected' : '' }}>Bahrain</option>
                                <option value="Bangladesh" {{ old('country', $softwarehouse->country) == 'Bangladesh' ? 'selected' : '' }}>Bangladesh</option>
                                <option value="Belarus" {{ old('country', $softwarehouse->country) == 'Belarus' ? 'selected' : '' }}>Belarus</option>
                                <option value="Belgium" {{ old('country', $softwarehouse->country) == 'Belgium' ? 'selected' : '' }}>Belgium</option>
                                <option value="Bolivia" {{ old('country', $softwarehouse->country) == 'Bolivia' ? 'selected' : '' }}>Bolivia</option>
                                <option value="Brazil" {{ old('country', $softwarehouse->country) == 'Brazil' ? 'selected' : '' }}>Brazil</option>
                                <option value="Bulgaria" {{ old('country', $softwarehouse->country) == 'Bulgaria' ? 'selected' : '' }}>Bulgaria</option>
                                <option value="Canada" {{ old('country', $softwarehouse->country) == 'Canada' ? 'selected' : '' }}>Canada</option>
                                <option value="Chile" {{ old('country', $softwarehouse->country) == 'Chile' ? 'selected' : '' }}>Chile</option>
                                <option value="China" {{ old('country', $softwarehouse->country) == 'China' ? 'selected' : '' }}>China</option>
                                <option value="Colombia" {{ old('country', $softwarehouse->country) == 'Colombia' ? 'selected' : '' }}>Colombia</option>
                                <option value="Croatia" {{ old('country', $softwarehouse->country) == 'Croatia' ? 'selected' : '' }}>Croatia</option>
                                <option value="Czech Republic" {{ old('country', $softwarehouse->country) == 'Czech Republic' ? 'selected' : '' }}>Czech Republic</option>
                                <option value="Denmark" {{ old('country', $softwarehouse->country) == 'Denmark' ? 'selected' : '' }}>Denmark</option>
                                <option value="Egypt" {{ old('country', $softwarehouse->country) == 'Egypt' ? 'selected' : '' }}>Egypt</option>
                                <option value="Estonia" {{ old('country', $softwarehouse->country) == 'Estonia' ? 'selected' : '' }}>Estonia</option>
                                <option value="Finland" {{ old('country', $softwarehouse->country) == 'Finland' ? 'selected' : '' }}>Finland</option>
                                <option value="France" {{ old('country', $softwarehouse->country) == 'France' ? 'selected' : '' }}>France</option>
                                <option value="Georgia" {{ old('country', $softwarehouse->country) == 'Georgia' ? 'selected' : '' }}>Georgia</option>
                                <option value="Germany" {{ old('country', $softwarehouse->country) == 'Germany' ? 'selected' : '' }}>Germany</option>
                                <option value="Greece" {{ old('country', $softwarehouse->country) == 'Greece' ? 'selected' : '' }}>Greece</option>
                                <option value="Hungary" {{ old('country', $softwarehouse->country) == 'Hungary' ? 'selected' : '' }}>Hungary</option>
                                <option value="Iceland" {{ old('country', $softwarehouse->country) == 'Iceland' ? 'selected' : '' }}>Iceland</option>
                                <option value="India" {{ old('country', $softwarehouse->country) == 'India' ? 'selected' : '' }}>India</option>
                                <option value="Indonesia" {{ old('country', $softwarehouse->country) == 'Indonesia' ? 'selected' : '' }}>Indonesia</option>
                                <option value="Iran" {{ old('country', $softwarehouse->country) == 'Iran' ? 'selected' : '' }}>Iran</option>
                                <option value="Ireland" {{ old('country', $softwarehouse->country) == 'Ireland' ? 'selected' : '' }}>Ireland</option>
                                <option value="Israel" {{ old('country', $softwarehouse->country) == 'Israel' ? 'selected' : '' }}>Israel</option>
                                <option value="Italy" {{ old('country', $softwarehouse->country) == 'Italy' ? 'selected' : '' }}>Italy</option>
                                <option value="Japan" {{ old('country', $softwarehouse->country) == 'Japan' ? 'selected' : '' }}>Japan</option>
                                <option value="Jordan" {{ old('country', $softwarehouse->country) == 'Jordan' ? 'selected' : '' }}>Jordan</option>
                                <option value="Kazakhstan" {{ old('country', $softwarehouse->country) == 'Kazakhstan' ? 'selected' : '' }}>Kazakhstan</option>
                                <option value="Latvia" {{ old('country', $softwarehouse->country) == 'Latvia' ? 'selected' : '' }}>Latvia</option>
                                <option value="Lithuania" {{ old('country', $softwarehouse->country) == 'Lithuania' ? 'selected' : '' }}>Lithuania</option>
                                <option value="Malaysia" {{ old('country', $softwarehouse->country) == 'Malaysia' ? 'selected' : '' }}>Malaysia</option>
                                <option value="Mexico" {{ old('country', $softwarehouse->country) == 'Mexico' ? 'selected' : '' }}>Mexico</option>
                                <option value="Netherlands" {{ old('country', $softwarehouse->country) == 'Netherlands' ? 'selected' : '' }}>Netherlands</option>
                                <option value="New Zealand" {{ old('country', $softwarehouse->country) == 'New Zealand' ? 'selected' : '' }}>New Zealand</option>
                                <option value="Norway" {{ old('country', $softwarehouse->country) == 'Norway' ? 'selected' : '' }}>Norway</option>
                                <option value="Pakistan" {{ old('country', $softwarehouse->country) == 'Pakistan' ? 'selected' : '' }}>Pakistan</option>
                                <option value="Peru" {{ old('country', $softwarehouse->country) == 'Peru' ? 'selected' : '' }}>Peru</option>
                                <option value="Philippines" {{ old('country', $softwarehouse->country) == 'Philippines' ? 'selected' : '' }}>Philippines</option>
                                <option value="Poland" {{ old('country', $softwarehouse->country) == 'Poland' ? 'selected' : '' }}>Poland</option>
                                <option value="Portugal" {{ old('country', $softwarehouse->country) == 'Portugal' ? 'selected' : '' }}>Portugal</option>
                                <option value="Romania" {{ old('country', $softwarehouse->country) == 'Romania' ? 'selected' : '' }}>Romania</option>
                                <option value="Russia" {{ old('country', $softwarehouse->country) == 'Russia' ? 'selected' : '' }}>Russia</option>
                                <option value="Saudi Arabia" {{ old('country', $softwarehouse->country) == 'Saudi Arabia' ? 'selected' : '' }}>Saudi Arabia</option>
                                <option value="Serbia" {{ old('country', $softwarehouse->country) == 'Serbia' ? 'selected' : '' }}>Serbia</option>
                                <option value="Singapore" {{ old('country', $softwarehouse->country) == 'Singapore' ? 'selected' : '' }}>Singapore</option>
                                <option value="Slovakia" {{ old('country', $softwarehouse->country) == 'Slovakia' ? 'selected' : '' }}>Slovakia</option>
                                <option value="Slovenia" {{ old('country', $softwarehouse->country) == 'Slovenia' ? 'selected' : '' }}>Slovenia</option>
                                <option value="South Africa" {{ old('country', $softwarehouse->country) == 'South Africa' ? 'selected' : '' }}>South Africa</option>
                                <option value="South Korea" {{ old('country', $softwarehouse->country) == 'South Korea' ? 'selected' : '' }}>South Korea</option>
                                <option value="Spain" {{ old('country', $softwarehouse->country) == 'Spain' ? 'selected' : '' }}>Spain</option>
                                <option value="Sweden" {{ old('country', $softwarehouse->country) == 'Sweden' ? 'selected' : '' }}>Sweden</option>
                                <option value="Switzerland" {{ old('country', $softwarehouse->country) == 'Switzerland' ? 'selected' : '' }}>Switzerland</option>
                                <option value="Taiwan" {{ old('country', $softwarehouse->country) == 'Taiwan' ? 'selected' : '' }}>Taiwan</option>
                                <option value="Thailand" {{ old('country', $softwarehouse->country) == 'Thailand' ? 'selected' : '' }}>Thailand</option>
                                <option value="Turkey" {{ old('country', $softwarehouse->country) == 'Turkey' ? 'selected' : '' }}>Turkey</option>
                                <option value="Ukraine" {{ old('country', $softwarehouse->country) == 'Ukraine' ? 'selected' : '' }}>Ukraine</option>
                                <option value="United Arab Emirates" {{ old('country', $softwarehouse->country) == 'United Arab Emirates' ? 'selected' : '' }}>United Arab Emirates</option>
                                <option value="United Kingdom" {{ old('country', $softwarehouse->country) == 'United Kingdom' ? 'selected' : '' }}>United Kingdom</option>
                                <option value="United States" {{ old('country', $softwarehouse->country) == 'United States' ? 'selected' : '' }}>United States</option>
                                <option value="Uruguay" {{ old('country', $softwarehouse->country) == 'Uruguay' ? 'selected' : '' }}>Uruguay</option>
                                <option value="Venezuela" {{ old('country', $softwarehouse->country) == 'Venezuela' ? 'selected' : '' }}>Venezuela</option>
                                <option value="Vietnam" {{ old('country', $softwarehouse->country) == 'Vietnam' ? 'selected' : '' }}>Vietnam</option>
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
