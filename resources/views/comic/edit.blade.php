@extends('layouts.app')

@section('page.title')
    Aggiungi Fumetto
@endsection

@section('page.main')
    <div class="container">
        <div><a class="btn btn-light mb-3" href="{{ route ('comics.index') }}">&triangleleft; Back</a></div>
        <form action="{{ route('comics.update', $comic->id)}}" method="POST" class="form-control">
            @csrf
            @method('PUT')
            <div class="my-3">
                <label for="titolo" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" value="{{ $comic->title }}">  
            </div>
            <div class="my-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="descriptopn" cols="30" rows="5" class="form-control">{{ strip_tags($comic->description) }}</textarea> 
            </div>
            <div class="my-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" name="thumb" value="{{ $comic->thumb }}">  
            </div>
            <div class="my-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" value="{{ $comic->price}}">  
            </div>
            <div class="my-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" name="series" value="{{ $comic->series}}">  
            </div>
            <div class="my-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="date" class="form-control" name="sale_date" value="{{ $comic->sale_date}}">  
            </div>
            <div class="my-3">
                <label for="type" class="form-label">Type</label>
                <select type="text" class="form-control" name="type">
                    <option value="" {{ $comic->type === '' ? 'selected' : null}}>Select type of comic</option>
                    <option value="comic book" {{ $comic->type === 'comic book' ? 'selected' : null}}>Comic Book</option>
                    <option value="graphic novel" {{ $comic->type === 'graphic novel' ? 'selected' : null}}>Graphic Novel</option>
                </select>
            </div>
            <div class="my-3">
                <label for="artists" class="form-label">Artists</label>
                <input type="text" class="form-control" name="artists" value="{{ $comic->artists }}">  
            </div>
            <div class="my-3">
                <label for="writers" class="form-label">Writers</label>
                <input type="text" class="form-control" name="writers" value="{{ $comic->writers }}">  
            </div>
            <input type="submit" value="Insert" class="btn btn-success">
        </form>
    </div>
@endsection