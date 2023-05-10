@extends('layouts.app')

@section('page.title')
    {{ $comic->title}}
@endsection

@section('page.main')
    <div class="container p-3">
        <div><a class="btn btn-danger mb-5" href="{{ route('comics.index') }}">&triangleleft; Back</a></div>
        <div><img class="img-fluid mb-3" src="{{ $comic->thumb }}" alt="{{ $comic->title}}"></div>
        <div>{{ $comic->title}}</div>
        <hr>
        <div>{{ $comic->series}}</div>
        <hr>
        <div>{{ $comic->description}}</div>
        <hr>
        <div>{{ $comic->sale_date}}</div>
        <hr>
        <div>{{ $comic->artists}}</div>
        <hr>
        <div>{{ $comic->writers}}</div>
        <hr>
        <div>{{ $comic->price}}</div>
    </div>
@endsection