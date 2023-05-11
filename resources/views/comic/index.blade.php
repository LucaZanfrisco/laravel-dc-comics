@extends('layouts.app')

@section('header.title')
    <div class="container">
        <div class="mb-3"><a class="btn btn-dark" href="{{ route('comics.create') }}">Add Comic &plus;</a></div>
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
                        <div class="py-3">
                            <h3>{{ $comic->title }}</h3>
                        </div>
                        <a class="btn btn-success mt-3" href="{{ route('comics.show', $comic->id) }}">Detail</a>
                        <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-info my-3">Edit</a>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $comic->id }}">
                            Delete
                        </button>
                        <div class="modal fade" id="delete{{ $comic->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div>Are you sure you want to delete: {{ $comic->title }}</div>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                @endforeach
            </ul>
        </div>
    </section>
@endsection
