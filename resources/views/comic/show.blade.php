@extends('layouts.app')

@section('content')
    <header>
        <div class="container py-4">
            <h1>{{$comic->title}}</h1>
        </div>
        
    </header>
    <div class="container py-5">
        <div class="d-flex gap-2 p-3">
        
            <img src="{{$comic->thumb}}" alt="{{$comic->title}}" style="max-height: 300px;">
            <div>
                <div class="p-1"><strong>Serie: </strong>{{$comic->series}}</div>
                <div class="p-1"><strong>Prezzo: </strong>{{$comic->price}}</div>
                <div class="p-1"><strong>Descrizione: </strong>{{$comic->description}}</div>
                <div class="p-1"><strong>Aristi: </strong>{{$comic->artists}}</div>
                <div class="p-1"><strong>Scrittori: </strong>{{$comic->writers}}</div>
            </div>


        </div>
    </div>
@endsection