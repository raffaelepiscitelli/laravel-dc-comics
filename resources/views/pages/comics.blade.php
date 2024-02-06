@extends('layouts.app')

@section('main-content')
<main>
    <section class="d-flex flex-column justify-content-center align-items-center">
        <button class=" upper-button"> current series </button>
        <div class="comics d-flex flex-wrap justify-content-space-evenly align-items-stretch">
            @foreach ($comics as $comic)
            <article class="d-flex flex-column justify-content-center align-items-center">
                <img src="{{$comic['thumb']}}" alt="">
                <p class="text-center">{{$comic['series']}}</p>
            </article>
            @endforeach
        </div>
        <button class="bottom-button">Load more</button>
    </section>
</main>
@endsection 