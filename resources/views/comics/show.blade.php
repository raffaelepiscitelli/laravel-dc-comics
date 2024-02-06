@extends('layouts.app')

@section('main-content')

<section class="products bg-primary">
    <div class="container">
        <div class="row">
            <div class="row mb-3 justify-content-center">
                <div class="col-7 p-3">
                    <div class="card p-4 text-center">
                        <div class="card-image d-flex justify-content-center">
                            <img class="w-50" src="{{  $comic->thumb }}">
                        </div>
                        <h1>
                            {{ $comic->title }}
                        </h1>
                        <p>
                            Description: {{ $comic->description }}
                        </p>
                        <p>
                            Price: {{ $comic->price }}
                        </p>
                        <p>
                            Series: {{ $comic->series }}mq
                        </p>
                        <p>
                            Sale date: {{ $comic->sale_date }}
                        </p>
                        <p>
                            Type: {{ $comic->type }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection