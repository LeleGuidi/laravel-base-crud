@extends('layouts.base')

@section('title-page')
    Create card
@endsection
@section('main-content')
<main>
    <form method="POST" action="{{route('comics.store')}}">
        @csrf
        
          
      </form>
</main>
@endsection