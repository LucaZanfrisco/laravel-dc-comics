@extends('layouts.app')

@section('page.title')
    {{ $comic->title}}
@endsection

@section('page.main')
    <div class="container p-3">
        <div><a class="btn btn-danger mb-5" href="{{ route('comics.index') }}">&triangleleft; Back</a></div>
        <div><img class="img-fluid mb-3" src="{{ $comic->thumb }}" alt="{{ $comic->title}}"></div>
        <div class="py-3"><h3>{{ $comic->title}}</h3></div>
        <hr>
        <h5>Series</h5>
        <div>{{ $comic->series}}</div>
        <hr>
        <h5>Type</h5>
        <div>{{ $comic->type }}</div>
        <hr>
        <h5>Description</h5>
        <p>{{ $comic->description}}</p>
        <hr>
        <h5>Sale Date</h5>
        <div>{{ $comic->sale_date}}</div>
        <hr>
        <h5>Artists</h5>
        <div>{{ $comic->artists}}</div>
        <hr>
        <h5>Writers</h5>
        <div>{{ $comic->writers}}</div>
        <hr>
        <h5>Price</h5>
        <div>{{ $comic->price}}</div>
    </div>
@endsection