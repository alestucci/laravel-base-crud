@extends('templates.base')

@section('pageTitle', 'Comics')

@section('pageContent')
<div class="container">
    <div class="row g-3">
        @foreach ($comics as $comic)
        <div class="col-4">
            <div class="card h-100">
                <a href="{{ route('comics.show', $comic->id) }}"><img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="w-100"></a>
                <div class="card-body">
                    <h2 class="text-center"><a href="{{ route('comics.show', $comic->id) }}" class="text-decoration-none text-reset"> {{ $comic->title }} </a></h2>
                    <h6 class="text-center text-uppercase text-success">{{ $comic->type }}</h6>
                    <h6 class="text-center text-primary">Serie: <span class="fst-italic">{{ $comic->series }}</span></h6>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{ $comics->links() }}
</div>
@endsection