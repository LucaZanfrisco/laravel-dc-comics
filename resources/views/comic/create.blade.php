@extends('layouts.app')

@section('page.title')
    Aggiungi Fumetto
@endsection

@section('page.main')
    <div class="container">
        <div><a class="btn btn-light mb-3" href="{{ route ('comics.index') }}">&triangleleft; Back</a></div>
        <form action="{{ route('comics.store')}}" method="POST" class="form-control">
            @csrf
            <div class="my-3">
                <label for="titolo" class="form-label">Title</label>
                <input type="text" class="form-control" name="title">  
            </div>
            <div class="my-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" name="Description">  
            </div>
            <div class="my-3">
                <label for="titolo" class="form-label">Thumb</label>
                <input type="text" class="form-control" name="Thumb">  
            </div>
            <div class="my-3">
                <label for="titolo" class="form-label">Price</label>
                <input type="text" class="form-control" name="Price">  
            </div>
            <div class="my-3">
                <label for="titolo" class="form-label">Series</label>
                <input type="text" class="form-control" name="series">  
            </div>
            <div class="my-3">
                <label for="titolo" class="form-label">Sale Date</label>
                <input type="text" class="form-control" name="sale_date">  
            </div>
            <div class="my-3">
                <label for="titolo" class="form-label">Type</label>
                <select type="text" class="form-control" name="type">
                    <option value="" selected>Select type of comic</option>
                    <option value="comic book">Comic Book</option>
                    <option value="graphic novel">Graphic Novel</option>
                </select>
            </div>
            <div class="my-3">
                <label for="titolo" class="form-label">Artists</label>
                <input type="text" class="form-control" name="artists">  
            </div>
            <div class="my-3">
                <label for="titolo" class="form-label">Writers</label>
                <input type="text" class="form-control" name="writers">  
            </div>
            <input type="submit" value="Insert" class="btn btn-success">
        </form>
    </div>
@endsection