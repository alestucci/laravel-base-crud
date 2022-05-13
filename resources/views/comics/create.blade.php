@extends('templates.base')

@section('pageTitle', 'Inserisci un nuovo fumetto')

@section('pageContent')
<div class="container">
    <form action="{{ route('comics.store')}}" method="post">
        @csrf
        <div class="my-2">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
        </div>
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="my-2">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" name="description" id="description" class="form-control" value="{{ old('description') }}">
        </div>
        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="my-2">
            <label for="thumb" class="form-label">Copertina (link)</label>
            <input type="text" name="thumb" id="thumb" class="form-control" value="{{ old('thumb') }}">
        </div>
        @error('thumb')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="my-2">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" name="price" id="price" step="0.01" class="form-control" value="{{ old('price') }}">
        </div>
        @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="my-2">
            <label for="series" class="form-label">Serie</label>
            <input type="text" name="series" id="series" class="form-control" value="{{ old('series') }}">
        </div>
        @error('series')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="my-2">
            <label for="sale_date" class="form-label">Data di vendita</label>
            <input type="date" name="sale_date" id="sale_date" class="form-control" value="{{ old('sale_date') }}">
        </div>
        @error('sale_date')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="my-2">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" name="type" id="type" class="form-control" value="{{ old('type') }}">
        </div>
        <div class="my-4">
            <button class="btn btn-primary my-2">Salva</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
        </div>
    </form>
</div>
@endsection