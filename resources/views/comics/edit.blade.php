@extends('layouts.base')

@section('title-page')
    Create card
@endsection
@section('main-content')
<main class="main_create">
    <div class="container">
        <h1>Inserisci il nuovo fumetto</h1>
        <form method="POST" action="{{route('comics.update', $comic->id)}}">
            @csrf
            @method('put')
            <div class="col">
                <label for="title">Titolo</label>
                <input type="text" name="title" value="{{$comic->title}}">
            </div>
            <div class="col">
                <label for="description">Descrizione</label>
                <input type="textarea" name="description" value="{{$comic->description}}">
            </div>
            <div class="col">
                <label for="thumb">URL copertina</label>
                <input type="text" name="thumb" value="{{$comic->thumb}}">
            </div>
            <div class="col">
                <label for="price">Prezzo</label>
                <input type="text" name="price" value="{{$comic->price}}">
            </div>
            <div class="col">
                <label for="series">Genere</label>
                <input type="text" name="series" value="{{$comic->series}}">
            </div>
            <div class="col">
                <label for="sale_date">Data di uscita</label>
                <input type="date" name="sale_date" value="{{$comic->sale_date}}">
            </div>
            <div class="col">
                <label for="type">Tipo</label>
                <input type="text" name="type" value="{{$comic->type}}">
            </div>
            <div class="col">
                <label for="artists">Artisti</label>
                <input type="text" name="artists" value="{{$comic->artists}}">
            </div>
            <div class="col">
                <label for="writers">Scrittori</label>
                <input type="text" name="writers" value="{{$comic->writers}}">
            </div>
            <input id="invia" type="submit" value="INVIA">
        </form>
    </div>
</main>
@endsection