@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row g-4">
            <div class="col">
                <div>
                    <div class="container-lg d-flex flex-wrap">
                        @foreach ($comics as $comic)
                            <div class="comicCard me-5">
                                <a href="{{ route('comics.show', $comic->id) }}">
                                    <img class="mb-3" src="{{ $comic->thumb }}" alt="">
                                    <p>Prezzo: {{$comic->price}}</p>
                                    <h3 class="mb-2">{{ $comic->title }}</h3>
                                    
                                    
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
