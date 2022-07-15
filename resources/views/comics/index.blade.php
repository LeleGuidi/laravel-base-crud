@extends('layouts.base')

@section('title-page')
    Home Page
@endsection

@section('main-content')
<main class="cards">
    <section class="section_cards">
        <h1>current series</h1>
        <div class="row">
            @foreach ($comics as $index => $comic )
                <a class="cards_list" href="{{route('comics.show', $comic->id)}}">
                    <div class="card">
                        <div class="card_img">
                            <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                        </div>
                        <h4>{{$comic['series']}}</h4>
                    </div>
                </a>
            @endforeach
        </div>
        <a href="{{Route('comics.create')}}">
            <button>Aggiungi altri fumetti</button>
        </a>
    </section>
    <div class="cards_bottom">
        <div class="cards_bottom_row">
            @foreach ($contents as $content)
            <div class="col">
                <img src="{{$content['url']}}" alt="{{$content['alt']}}">
                {{$content['name']}}
            </div>
            @endforeach
        </div>
    </div>
</main>
@endsection