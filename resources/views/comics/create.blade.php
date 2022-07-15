@extends('layouts.base')

@section('title-page')
    Create card
@endsection
@section('main-content')
<main class="main_create">
    <div class="container">
        <h1>Inserisci il nuovo fumetto</h1>
        <form method="POST" action="{{route('comics.store')}}">
            @csrf
            <div class="col">
                <label for="title">Titolo</label>
                <input type="text" name="title" required>
            </div>
            <div class="col">
                <label for="description">Descrizione</label>
                <input type="textarea" name="description" required>
            </div>
            <div class="col">
                <label for="thumb">URL copertina</label>
                <input type="text" name="thumb" required>
            </div>
            <div class="col">
                <label for="price">Prezzo</label>
                <input type="text" name="price" required>
            </div>
            <div class="col">
                <label for="series">Genere</label>
                <input type="text" name="series" required>
            </div>
            <div class="col">
                <label for="sale_date">Data di uscita</label>
                <input type="date" name="sale_date" required>
            </div>
            <div class="col">
                <label for="type">Tipo</label>
                <input type="text" name="type" required>
            </div>
            <div class="col">
                <label for="artists">Artisti</label>
                <input type="text" name="artists" required>
            </div>
            <div class="col">
                <label for="writers">Scrittori</label>
                <input type="text" name="writers" required>
            </div>
            <input id="invia" type="submit" value="INVIA">
        </form>
    </div>
</main>
@endsection