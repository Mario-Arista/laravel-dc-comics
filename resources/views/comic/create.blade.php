@extends('layouts.app')

@section('title')
    Laravel Create Comic
@endsection

@section('content')
    <header>

        <div class="container py-4">
            <a href="{{route('comic.index')}}" class="text-decoration-none bg-primary text text-white p-2 fw-bold">TORNA INDIETRO</a>
            <h1 class="mt-3">Crea Fumetto:</h1>
        </div>

    </header>

    <div class="container py-5">
        <form action="{{route('comic.store')}}" method="POST">
            @csrf

            <div class="mb-3">
              <label for="title" class="form-label">Nome</label>
              <input type="text" class="form-control" id="title" name="title" required>
            </div>
    
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" required>
            </div>
    
            <div class="mb-3">
                <label for="thumb" class="form-label">Src immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" required>
            </div>
    
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea type="text" class="form-control" id="description" name="description"></textarea required>
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label">Artisti</label>
                <textarea type="text" class="form-control" id="artists" name="artists"></textarea required>
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label">Scrittori</label>
                <textarea type="text" class="form-control" id="writers" name="writers"></textarea required>
            </div>
    
            <button type="submit" class="btn btn-primary">Salva</button>

        </form>

    </div>
@endsection