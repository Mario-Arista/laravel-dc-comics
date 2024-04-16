@extends('layouts/app')

@section('title')
    Laravel Comics
@endsection

@section('content')


    <main>
        <div id="bg-main"></div>

        <div id="comics">

            <div class="container">

                <h2>current series</h2>
                
                @foreach ($comics as $comic)
                <a href="{{route('comics.show', $comic->id)}}" class="comic-cont">
                    
                    <div class="comic">
                        <img class="img-comic" src="{{$comic->thumb}}" alt="{{$comic->title}}">
                        <div class="comic-title">{{$comic->title}}</div>
                    </div>
                    
                </a>
                @endforeach
                
            </div>
            <div class="cta-cont">
                <a href="{{route('comics.create')}}" class="create-cta">CREA FUMETTO</a>
            </div>


        </div>

    </main>

@endsection