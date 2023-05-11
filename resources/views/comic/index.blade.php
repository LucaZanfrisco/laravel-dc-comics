@extends('layouts.app')

@section('header.title')
<div class="container">
    <div class="mb-3"><a class="btn btn-dark" href="{{ route('comics.create')}}">Add Comic &plus;</a></div>
</div>
    <h1>Lista Comics</h1>
@endsection

@section('page.main')
    <section id="main">
        <div class="container"> 
            <ul class="row row-cols-1 row-cols-md-3 row-cols-xl-5">
                @foreach ($comics as $comic)
                    <li class="card p-3">
                        <div><img class="img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->title }}"></div>
                        <div class="py-3"><h3>{{ $comic->title }}</h3></div>
                        {{-- <div>{{ $comic->price }}</div>
                        <div>{{ $comic->series }}</div>
                        <div>{{ $comic->sale_date }}</div>
                        <hr>
                        <div>{{ $comic->artists }}</div>
                        <hr>
                        <div>{{ $comic->writers }}</div> --}}
                        <a class="btn btn-success mt-3" href="{{ route('comics.show', $comic->id) }}">Detail</a>
                        <a href="{{ route('comics.edit', $comic->id)}}" class="btn btn-info my-3">Edit</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection