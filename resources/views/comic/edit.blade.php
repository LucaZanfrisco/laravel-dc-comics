@extends('layouts.app')

@section('page.title')
    Aggiungi Fumetto
@endsection

@section('page.main')
    <div class="container">
        <div><a class="btn btn-light mb-3" href="{{ route('comics.index') }}">&triangleleft; Back</a></div>
        <form action="{{ route('comics.update', $comic->id) }}" method="POST" class="form-control">
            @csrf
            @method('PUT')
            <div class="my-3">
                <label for="titolo" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $comic->title) }}">
                @error('title')
                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                @enderror
            </div>
            <div class="my-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="descriptopn" cols="30" rows="5" class="form-control @error('description') is-invalid @enderror">{{ strip_tags(old('description', $comic->description)) }}</textarea>
                @error('description')
                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                @enderror
            </div>
            <div class="my-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" value="{{ old('thumb', $comic->thumb) }}">
                @error('thumb')
                    <div class="alert alert-danger mt-3"> {{ $message }}</div>
                @enderror
            </div>
            <div class="my-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price', $comic->price) }}">
                @error('price')
                    <div class="alert alert-danger mt-3"> {{ $message }}</div>
                @enderror
            </div>
            <div class="my-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" name="series" value="{{ old('series', $comic->series) }}">
                @error('series')
                    <div class="alert alert-danger mt-3"> {{ $message }}</div>
                @enderror
            </div>
            <div class="my-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="date" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date"
                    value="{{ old('sale_date', $comic->sale_date) }}">
                @error('sale_date')
                    <div class="alert alert-danger mt-3"> {{ $message }}</div>
                @enderror
            </div>
            <div class="my-3">
                <label for="type" class="form-label">Type</label>
                <select type="text" class="form-control @error('type') is-invalid @enderror" name="type">
                    <option value="" {{ $comic->type === '' ? 'selected' : null }}>Select type of comic</option>
                    <option value="comic book" {{ old('type', $comic->type) === 'comic book' ? 'selected' : null }}>Comic
                        Book</option>
                    <option value="graphic novel" {{ old('type', $comic->type) === 'graphic novel' ? 'selected' : null }}>
                        Graphic Novel</option>
                </select>
                @error('type')
                    <div class="alert alert-danger mt-3"> {{ $message }}</div>
                @enderror
            </div>
            <div class="my-3">
                <label for="artists" class="form-label">Artists</label>
                <input type="text" class="form-control @error('artists') is-invalid @enderror" name="artists" value="{{ old('artists', $comic->artists) }}">
                @error('artists')
                    <div class="alert alert-danger mt-3"> {{ $message }}</div>
                @enderror
            </div>
            <div class="my-3">
                <label for="writers" class="form-label">Writers</label>
                <input type="text" class="form-control @error('writers') is-invalid @enderror" name="writers" value="{{ old('writers', $comic->writers) }}">
                @error('writers')
                    <div class="alert alert-danger mt-3"> {{ $message }}</div>
                @enderror
            </div>
            <input type="submit" value="Insert" class="btn btn-success">
        </form>
    </div>
@endsection
