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
                    <h6 class="text-center text-primary">Serie: <span class="fst-italic">{{ $comic->series }}</span></h6>
                    <p>{{ $comic->description }}</p>
                    <div class="row justify-content-between">
                        <div class="col-6">
                            <button class="btn btn-info">Disponibile dal {{date('d/m/Y', strtotime($comic->sale_date))}}</button>
                        </div>
                        <div class="col-3 d-flex justify-content-end">
                            <button class="btn btn-secondary">€ {{$comic->price }}</button>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-light">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection