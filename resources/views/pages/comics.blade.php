@extends('layouts.app')

@section('title', 'DC - Comics')

@section('main-content')

    <section class="pt-3 container">
        <div class="row">
            <h2 class="title">Current Series</h2>
            <div class=" d-flex flex-wrap">
                @foreach ($comics as $comic)
                <div class="card col-3 me-3 mt-3 mb-4">
                    <a href="{{ route('pages.show', $comic->id) }}">
                    <img src="{{ $comic['thumb'] }}" alt="">
                    <h4>{{ $comic['series'] }}</h4>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="button-wrapper">
                <button class="btn btn-primary">Load More</button>
            </div>
        </div>
    </section>
    
@endsection