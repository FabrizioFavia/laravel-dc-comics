@extends('layouts.app')
@section('content')
<form class="w-75 mx-auto" action="{{route('comics.update', $comic)}}" method="post">
    @csrf

    @method("PUT")
    <label class="mt-5" for="name">Title</label>
    <input class="form-control" type="text" name="title" value="{{$comic->title}}">

    <label for="name">description</label>
    <textarea class="form-control" name="description">{{$comic->description}}</textarea>

    <label for="name">Thumb</label>
    <input class="form-control" type="text" name="thumb" value="{{$comic->thumb}}">

    <label for="name">Price</label>
    <input class="form-control" type="text" name="price" value="{{$comic->price}}">

    <label for="name">Series</label>
    <input class="form-control" type="text" name="series" value="{{$comic->series}}">

    <label for="name">Date</label>
    <input class="form-control" type="text" name="sale_date" value="{{$comic->sale_date}}">

    <label for="name">Type</label>
    <input class="form-control" type="text" name="type" value="{{$comic->type}}">

    <label for="name">writer</label>
    <input class="form-control" type="text" name="writers" value="{{$comic->writers}}">

    <label for="name">Artists</label>
    <input class="form-control" type="text" name="artists" value="{{$comic->artists}}">

    <input class="form-control my-5 w-25 bg-primary" type="submit" value="Invia">
</form>
@endsection