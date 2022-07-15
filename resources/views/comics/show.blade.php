@extends('layouts.base')

@section('title-page')
    Single card
@endsection

@section('main-content')
<main class="main_card">
    <section class="section_card">
        <div class="top_card">
            <div class="container">
                <div class="cont_img">
                    <span class="genre">comic book</span>
                    <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                    <a href="/#" class="gallery">View gallery</a>
                </div>
            </div>
        </div>
        <div class="middle_card">
            <div class="container">
                <div class="row">
                    <div class="col left">
                        <h1>{{$comic['title']}}</h1>
                        <div class="cta">
                            <button class="purchase">
                                <div class="price">
                                    <span>U.S. Price:</span>  {{$comic['price']}}
                                </div>
                                <span class="status">available</span>
                            </button>
                            <button class="availability">Check Availability <i class="fa-solid fa-caret-down"></i></button>
                        </div>
                        <p>{{$comic['description']}}</p>
                    </div>
                    <div class="col right">
                        <h5>advertisement</h5>
                        <img src="{{asset('img/adv.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom_card">
            <div class="container">
                <div class="row">
                    <div class="col left">
                        <h4>Talent</h4>
                        <div class="artby">
                            <span>Art by:</span>
                            <p>
                                {{$comic['artists']}}
                            </p>
                        </div>
                        <div class="writtenby">
                            <span>Written by:</span>
                            <p>
                                {{$comic['writers']}}
                            </p>
                        </div>
                    </div>
                    <div class="col right">
                        <h4>Specs</h4>
                        <div class="series">
                            <span>Series:</span>
                            <p>
                                <a href="/#">{{$comic['series']}}</a>
                            </p>
                        </div>
                        <div class="price">
                            <span>U.S. Price:</span>
                            <p>{{$comic['price']}}</p>
                        </div>
                        <div class="sale">
                            <span>On Sale Date:</span>
                            <p>{{$comic['sale_date']}}</p> 
                        </div>
                    </div>
                </div>
                <div class="row cta">
                    <a href="{{route('comics.edit', $comic->id)}}">
                        <button class="edit">Modifica</button>
                    </a>
                    <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" class="destroy" value="Elimina">
                    </form>
                </div>
            </div>
        </div>
        <div class="contents">
            <div class="container">
                <div class="row">
                    @foreach ($contents as $key => $content)
                        @if ($key + 1 != count($contents))
                        <div class="col">
                            <span>{{$content['name']}}</span>
                            <img src="../{{$content['url']}}" alt="{{$content['alt']}}">
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</main>
@endsection