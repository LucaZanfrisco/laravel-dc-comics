@extends('layouts.app')

@section('header.title')
    <h1>Lista Comics</h1>
@endsection

@section('page.main')
    <section id="main">
        <div class="container"> 
            <ul class="row row-cols-1 row-cols-md-3 row-cols-xl-5">
                @foreach ($comics as $comic)
                    <li class="card p-3">
                        <div><img src=""{{ $comic->thumb}} alt="{{ $comic->title }}"></div>
                        <div>{{ $comic->title }}</div>
                        <div>{{ $comic->price }}</div>
                        <div>{{ $comic->series }}</div>
                        <div>{{ $comic->sale_date }}</div>
                        <hr>
                        <div>{{ $comic->artists }}</div>
                        <hr>
                        <div>{{ $comic->writers }}</div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection