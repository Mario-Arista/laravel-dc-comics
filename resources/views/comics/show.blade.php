@extends('layouts.app')

@section('title')
    Laravel Single Comic
@endsection

@section('content')
    <header>

        <div class="container py-4 d-flex justify-content-start align-items-center gap-3">
            <a href="{{route('comics.index')}}" class="text-decoration-none bg-danger text text-white p-2 fw-bold">TORNA INDIETRO</a>
            <h1 class="m-0 text-danger">{{$comic->title}}</h1>
        </div>

    </header>
    
    <div class="container py-5">
        <div class="d-flex gap-2 p-3 text-white">
        
            <img src="{{$comic->thumb}}" alt="{{$comic->title}}" style="max-height: 300px;">
            <div>
                <div class="p-1"><strong class="text-danger">Serie: </strong>{{$comic->series}}</div>
                <div class="p-1"><strong class="text-danger">Prezzo: </strong>{{$comic->price}}</div>
                <div class="p-1"><strong class="text-danger">Descrizione: </strong>{{$comic->description}}</div>
                <div class="p-1"><strong class="text-danger">Aristi: </strong>{{$comic->artists}}</div>
                <div class="p-1"><strong class="text-danger">Scrittori: </strong>{{$comic->writers}}</div>
            </div>


        </div>
    </div>
    <div class="container py-4 text-center d-flex justify-content-center">

        <a href="{{route('comics.edit', $comic->id)}}" class="text-decoration-none bg-danger text text-white p-2 fw-bold p-3 me-3">MODICA FUMETTO</a>
        <button type="button" class="btn bg-danger text text-white p-2 fw-bold p-3 me-3 border border-0 rounded-0" data-bs-toggle="modal" data-bs-target="#deleteModal">ELIMINA</button>

    </div>



    <!-- MODALE BOOTSTRAP -->

    <div class="modal fade bg-dark" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">

            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteModalLabel">Elimina la pasta</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                Sei sicuro che vuoi eliminare questo fumetto? "{{$comic->title}}"
            </div>


            <div class="modal-footer">

                <button type="button" class="btn btn-secondary p-2 fw-bold p-3 border border-0 rounded-0" data-bs-dismiss="modal">ANNULLA</button>
                <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
        
                    <button class="bg-danger text text-white p-2 fw-bold p-3 border border-0">ELIMINA</button>
                </form>

            </div>

            
        </div>
    </div>
@endsection