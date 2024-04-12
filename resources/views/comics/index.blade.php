@extends('layouts/app')

@section('title')
    Laravel Comics
@endsection

@section('content')

    <header>
        <div class="container py-4 d-flex justify-content-between align-items-center">
            <h1 class="m-0 text-danger">Laravel Comics</h1>
            <a href="{{route('comics.create')}}" class="text-decoration-none bg-danger text text-white p-2 fw-bold p-3">CREA FUMETTO</a>
        </div>
        
    </header>

    <main>
        <div class="container mb-5">
            <div class="row">

                @foreach ($comics as $comic)
                    <a href="{{route('comics.show', $comic->id)}}" class="col-3 d-flex flex-column p-3 text-decoration-none text-white border border-1 border-danger">
        
                        <img class="img-fluid align-self-center pb-2" src="{{$comic->thumb}}" alt="{{$comic->title}}" style="max-height: 300px;">
                        <div class="align-self-center">
                            <div><strong class="text-danger">Titolo: </strong>{{$comic->title}}</div>
                            <div><strong class="text-danger">Serie: </strong>{{$comic->series}}</div>
                            
                            <div><strong class="text-danger">Prezzo: </strong>{{$comic->price}}</div>
                        </div>


                    </a>
            
                @endforeach
            </div>
        </div>

    </main>

@endsection