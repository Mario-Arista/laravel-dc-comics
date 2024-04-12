@extends('layouts/app')

@section('title')
    Laravel Comics
@endsection

@section('content')
    <header>
        <div class="container py-4">
            <h1 class="mb-3">Laravel Comics:</h1>
            <a href="{{route('comics.create')}}" class="text-decoration-none bg-primary text text-white p-2 fw-bold">CREA FUMETTO</a>
        </div>
        
    </header>
    <main>
        <div class="container">
            <div class="row">

                @foreach ($comics as $comic)
                    <a href="{{route('comics.show', $comic->id)}}" class="col-3 card d-flex flex-column gap-2 p-3 text-decoration-none">
        
                        <img class="img-fluid align-self-center" src="{{$comic->thumb}}" alt="{{$comic->title}}" style="max-height: 300px;">
                        <div><strong>Titolo: </strong>{{$comic->title}}</div>
                        <div><strong>Serie: </strong>{{$comic->series}}</div>
                        
                        <div><strong>Prezzo: </strong>{{$comic->price}}</div>

                    </a>
            
                @endforeach
            </div>
        </div>

    </main>

@endsection