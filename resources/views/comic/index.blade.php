@extends('layouts.app')

@section('header.title')
    <div class="container">
        <div class="mb-3"><a class="btn btn-dark" href="{{ route('comics.create') }}">Add Comic &plus;</a></div>
    </div>
    <h1>Comics List</h1>
@endsection

@section('page.main')
    <section id="main">
        <div class="container">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Type</th>
                        <th scope="col">Sale Date</th>
                        <th colspan="3">Info</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <td>
                                {{ $comic->title }}
                            </td>
                            <td>
                                {{ $comic->type}}
                            </td>
                            <td>
                                {{ $comic->sale_date}}
                            </td>
                            <td>
                                <a class="btn btn-success" href="{{ route('comics.show', $comic->id) }}">Detail</a>
                            </td>
                            <td>
                                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-info">Edit</a>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#delete{{ $comic->id }}">
                                    Delete
                                </button>
                            </td>
                            <div class="modal fade" id="delete{{ $comic->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
