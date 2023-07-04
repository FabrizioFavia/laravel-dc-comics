@extends('layouts.app')
@section('content')
<form class="w-75 mx-auto" action="{{route('comics.store')}}" method="post">
    @csrf
    <label class="mt-5" for="name">Title</label>
    <input class="form-control" type="text" name="title">

    <label for="name">description</label>
    <input class="form-control" type="text" name="description">

    <label for="name">Thumb</label>
    <input class="form-control" type="text" name="thumb">

    <label for="name">Price</label>
    <input class="form-control" type="text" name="price">

    <label for="name">Series</label>
    <input class="form-control" type="text" name="series">

    <label for="name">Date</label>
    <input class="form-control" type="text" name="sale_date">

    <label for="name">Type</label>
    <input class="form-control" type="text" name="type">

    <label for="name">writer</label>
    <input class="form-control" type="text" name="writers">

    <label for="name">Artists</label>
    <input class="form-control" type="text" name="artists">

    <input class="form-control my-5 w-25 bg-primary" type="submit" value="Invia">
</form>
@endsection