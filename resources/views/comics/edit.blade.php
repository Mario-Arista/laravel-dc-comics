@extends('layouts.app')

@section('title')
    Laravel Modific Comic
@endsection

@section('content')
    <header>

        <div class="container py-4 d-flex justify-content-start align-items-center gap-3">
            <a href="{{route('comics.show', $comic->id)}}" class="text-decoration-none bg-danger text text-white p-2 fw-bold">TORNA INDIETRO</a>
            <h1 class="m-0 text-danger">Modifica Fumetto:</h1>
        </div>

    </header>
    
    <main class="bg-dark">
      <div class="container py-5 text-white">
        <form class="col-6" action="{{route('comics.update', $comic->id)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
              <label for="title" class="form-label">Nome</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') ?? $comic->title }}" required>
              @error('title')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>
    
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{ old('series') ?? $comic->series }}" required>
                @error('series')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
            </div>
    
            <div class="mb-3">
                <label for="thumb" class="form-label">Src immagine</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{ old('thumb') ?? $comic->thumb }}" required>
                @error('thumb')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
            </div>
    
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') ?? $comic->price }}">
                @error('price')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="5" required>{{ old('description') ?? $comic->description }}</textarea>
                @error('description')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label">Artisti (Not required)</label>
                <textarea type="text" class="form-control @error('artists') is-invalid @enderror" id="artists" name="artists" rows="5">{{ old('artists') ?? $comic->artists }}</textarea>
                @error('artists')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label">Scrittori (Not required)</label>
                <textarea type="text" class="form-control @error('writers') is-invalid @enderror" id="writers" name="writers" rows="5">{{ old('writers') ?? $comic->writers }}</textarea>
                @error('writers')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
            </div>
    
            <button type="submit" class="btn btn-danger">Modifca</button>

        </form>

      </div>

    </main>

@endsection