@extends('layouts.app')
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="w-75 mx-auto needs-validation" action="{{ route('comics.update', $comic) }}" method="post">
        @csrf

        @method('PUT')
        <label class="mt-5" for="name">Title</label>
        <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" value="{{ $comic->title }}">
        @error('title')
            <div class="text-danger mb-2 invalid-feedback">{{ $message }}</div>
        @enderror

        <label for="name">description</label>
        <textarea class="form-control @error('description') is-invalid @enderror" name="description">{{ $comic->description }}</textarea>
        @error('description')
            <div class="text-danger mb-2 invalid-feedback">{{ $message }}</div>
        @enderror

        <label for="name">Thumb</label>
        <input class="form-control @error('thumb') is-invalid @enderror" type="text" name="thumb" value="{{ $comic->thumb }}">
        @error('thumb')
            <div class="text-danger mb-2 invalid-feedback">{{ $message }}</div>
        @enderror

        <label for="name">Price</label>
        <input class="form-control @error('price') is-invalid @enderror" type="text" name="price" value="{{ $comic->price }}">
        @error('price')
            <div class="text-danger mb-2 invalid-feedback">{{ $message }}</div>
        @enderror

        <label for="name">Series</label>
        <input class="form-control @error('series') is-invalid @enderror" type="text" name="series" value="{{ $comic->series }}">
        @error('series')
            <div class="text-danger mb-2 invalid-feedback">{{ $message }}</div>
        @enderror

        <label for="name">Date</label>
        <input class="form-control @error('sale_date') is-invalid @enderror" type="text" name="sale_date" value="{{ $comic->sale_date }}">
        @error('sale_date')
            <div class="text-danger mb-2 invalid-feedback">{{ $message }}</div>
        @enderror

        <label for="name">Type</label>
        <input class="form-control @error('type') is-invalid @enderror" type="text" name="type" value="{{ $comic->type }}">
        @error('type')
            <div class="text-danger mb-2 invalid-feedback">{{ $message }}</div>
        @enderror

        <label for="name">writer</label>
        <input class="form-control @error('writers') is-invalid @enderror" type="text" name="writers" value="{{ $comic->writers }}">
        @error('writers')
            <div class="text-danger mb-2 invalid-feedback">{{ $message }}</div>
        @enderror

        <label for="name">Artists</label>
        <input class="form-control @error('artists') is-invalid @enderror" type="text" name="artists" value="{{ $comic->artists }}">
        @error('artists')
            <div class="text-danger mb-2 invalid-feedback">{{ $message }}</div>
        @enderror

        <input class="form-control my-5 w-25 bg-primary" type="submit" value="Invia">
    </form>
@endsection
