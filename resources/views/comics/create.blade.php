@extends('templates.base')

@section('pageTitle', 'Inserisci un nuovo fumetto')

@section('pageContent')
<div class="container">
    <form action="{{ route('comics.store')}}" method="post">
        @csrf
        <div class="my-2">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="my-2">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" name="description" id="description" class="form-control">
        </div>
        <div class="my-2">
            <label for="thumb" class="form-label">Copertina (link)</label>
            <input type="text" name="thumb" id="thumb" class="form-control">
        </div>
        <div class="my-2">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" name="price" id="price" step="0.01" class="form-control">
        </div>
        <div class="my-2">
            <label for="series" class="form-label">Serie</label>
            <input type="text" name="series" id="series" class="form-control">
        </div>
        <div class="my-2">
            <label for="sale_date" class="form-label">Data di vendita</label>
            <input type="date" name="sale_date" id="sale_date" class="form-control">
        </div>
        <div class="my-2">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" name="type" id="type" class="form-control">
        </div>
        <div class="my-4">
            <button class="btn btn-primary my-2">Salva</button>
        </div>
    </form>
</div>
@endsection