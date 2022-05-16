@extends('templates.base')

@section('pageTitle', $pageTitle)

@section('pageContent')
<div class="container">
    <div class="row g-3 justify-content-center">
        <div class="col-6">
            <div class="card h-100">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="w-100">
                <div class="card-body">
                    <h1 class="text-center">{{ $comic->title }}</h1>
                    <h6 class="text-center text-uppercase text-success">{{ $comic->type }}</h6>
                    <h6 class="text-center text-primary">Serie: <span class="fst-italic">{{ $comic->series }}</span>
                    </h6>
                    <p>{{ $comic->description }}</p>
                    <div class="d-flex justify-content-between flex-wrap">
                        <button class="btn btn-info mx-1">Disponibile dal {{date('d/m/Y',
                            strtotime($comic->sale_date))}}</button>
                        <button class="btn btn-success mx-1">€ {{$comic->price / 100 }}</button>
                    </div>
                    <div class="d-flex justify-content-end my-3 flex-wrap">
                        <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-secondary mx-1">Edit</a>
                        <button id="delete-button" class="btn btn-danger mx-1">Cancella</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="background" class="d-none"></div>
<div id="alert-window" class="d-flex flex-column justify-content-evenly d-none">
    <h1 class="text-blue text-center">Confermi l'eliminazione?</h1>
    <div class="w-75 mx-auto d-flex justify-content-around">
        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button id="confirm-button" class="btn btn-outline-danger">Conferma</button>
        </form>
        <button id="cancel-button" class="btn btn-outline-secondary">Annulla</button>
    </div>

</div>

@endsection