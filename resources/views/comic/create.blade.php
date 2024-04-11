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
        <form action="">

        </form>
    </div>
@endsection