@extends('layouts.app')

@section('title', 'DC - Comics')

@section('main-content')

    <section class="pt-3 container">
        <div class="row">
            <h2 class="title">Current Series</h2>
            <div class=" d-flex flex-wrap">
                @foreach ($comics as $comic)
                <div class="card col-4"">
                    <img src="{{ $comic['thumb'] }}" alt="" class="w-80">
                    <h3>{{ $comic['series'] }}</h3>
                </div>
                @endforeach
            </div>
            <div class="button-wrapper">
                <button class="btn btn-primary">Load More</button>
            </div>
        </div>
    </section>
    
@endsection