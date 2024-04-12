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

    <div class="container py-5 text-white">
        <form class="col-6" action="{{route('comics.update', $comic->id)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
              <label for="title" class="form-label">Nome</label>
              <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}" required>
            </div>
    
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}" required>
            </div>
    
            <div class="mb-3">
                <label for="thumb" class="form-label">Src immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}" required>
            </div>
    
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea type="text" class="form-control" id="description" name="description" rows="5">{{ $comic->description }}</textarea required>
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label">Artisti (Not required)</label>
                <textarea type="text" class="form-control" id="artists" name="artists" rows="5">{{ $comic->artists }}</textarea>
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label">Scrittori (Not required)</label>
                <textarea type="text" class="form-control" id="writers" name="writers" rows="5">{{ $comic->writers }}</textarea>
            </div>
    
            <button type="submit" class="btn btn-danger">Modifca</button>

        </form>

    </div>
@endsection