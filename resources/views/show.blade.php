@extends('layouts.app')
@section('page-title', 'Title Override: Other Page')
@section('content')
    <div class="container-lg p-5">
        <button class="btn btn-primary"><a href="{{route("comics.edit", $comic->id)}}">Modifica prodotto</a></button>
        <div class="singleCard">
            <h1 class="mb-4">{{ $comic->title }}</h1>

            <div class="card">
                <img class="mb-3 comicImg" src="{{ $comic->thumb }}" alt="">
                <p class="mb-2 text-white">{{ $comic->description }}</p>
                <p class="text-white">Prezzo: {{ $comic->price }}</p>
            </div>
        </div>
    </div>
@endsection
