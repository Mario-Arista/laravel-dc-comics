@extends('layouts.app')

@section('title')
    Laravel Create Comic
@endsection

@section('content')
    <header>

        <div class="container py-4">
            <a href="{{route('comics.index')}}" class="text-decoration-none bg-danger text text-white p-2 fw-bold">TORNA INDIETRO</a>
            <h1 class="mt-3 text-danger">Crea Fumetto:</h1>
        </div>

    </header>

    <div class="container py-5 text-white">
        <form class="col-6" action="{{route('comics.store')}}" method="POST">
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
                <textarea type="text" class="form-control" id="description" name="description" rows="5"></textarea required>
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label">Artisti (Not required)</label>
                <textarea type="text" class="form-control" id="artists" name="artists" rows="5"></textarea>
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label">Scrittori (Not required)</label>
                <textarea type="text" class="form-control" id="writers" name="writers" rows="5"></textarea>
            </div>
    
            <button type="submit" class="btn btn-danger">Salva</button>

        </form>

    </div>
@endsection