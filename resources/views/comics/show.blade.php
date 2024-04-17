@extends('layouts.app')

@section('title')
    {{$comic->title}}
@endsection

@section('content')

    <main>

        <div id="bg-main"></div>
    
        <div class="bg-blue">
            <div class="container">
                <div class="gallery-cont">
                    <img class="img-gallery" src="{{$comic->thumb}}" alt="{{$comic->title}}">
                </div>
            </div>

        </div>

        <div class="container py-5">
    
            <div class="d-flex align-items-center gap-2 p-3 text-white">
            
                <img src="{{$comic->thumb}}" alt="{{$comic->title}}" style="max-height: 300px;">

                <div>
                    <div class="p-1"><strong>Titolo: </strong>{{$comic->title}}</div>
                    <div class="p-1"><strong>Serie: </strong>{{$comic->series}}</div>
                    <div class="p-1"><strong>Prezzo: </strong>{{$comic->price}}</div>
                    <div class="p-1"><strong>Descrizione: </strong>{{$comic->description}}</div>
                    <div class="p-1"><strong>Aristi: </strong>{{$comic->artists}}</div>
                    <div class="p-1"><strong>Scrittori: </strong>{{$comic->writers}}</div>
                </div>
    
    
            </div>
        </div>

        <div class="container py-4 text-center d-flex justify-content-center">

            <a href="{{route('comics.edit', $comic->id)}}" class="blue-cta text-decoration-none text text-white p-2 fw-bold p-3 me-3">MODICA FUMETTO</a>
            <button type="button" class="btn blue-cta text text-white p-2 fw-bold p-3 me-3 border border-0 rounded-0" data-bs-toggle="modal" data-bs-target="#deleteModal">ELIMINA</button>
    
        </div>

    </main>

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
        
                    <button class="blue-cta text text-white p-2 fw-bold p-3 border border-0">ELIMINA</button>
                </form>

            </div>

            
        </div>
    </div>
@endsection