@extends('layouts.app')
@section('main-content')

<section class="container">
    <article class="container-card">
        <div class="row">
            @foreach($comics as $comic)
            <div class="col-3">
                <h1>
                    {{ $comic['type'] }}
                </h1>
                <p>{{ $comic['price'] }}</p>
                <p>{{ $comic['series'] }}</p>
                <div class="img-comics">
                    <img src="{{ $comic['thumb'] }}" alt="DC main logo">
                </div>
            </div>
            @endforeach
        </div>
    </article>
</section>

@endsection