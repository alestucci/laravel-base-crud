@extends('templates.base')

@section('pageTitle', 'Listino Prezzi')

@section('pageContent')
<div class="container">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Tipo</th>
                <th scope="col">Prezzo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
            <tr>
                <th scope="row">{{ $comic->title }}</th>
                <td>{{ $comic->type }}</td>
                <td>€
                    <?= number_format(($comic->price / 100), 2, ',', '')?>
                </td>
                <td>
                    <a class="btn btn-primary" href="{{ route('comics.edit', $comic->id) }}">Edit</a>
                </td>
                <td>
                    <button class="btn btn-danger delete-button" data-id="{{ $comic->id }}">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $comics->links() }}
</div>
<div id="background" class="d-none"></div>
<div id="alert-window" class="d-flex flex-column justify-content-evenly d-none">
    <h1 class="text-blue text-center">Confermi l'eliminazione?</h1>
    <div class="w-75 mx-auto d-flex justify-content-around">
        <form id="confirmation-form" method="POST" data-base="{{ route('comics.index') }}">
            @csrf
            @method('DELETE')
            <button id="confirm-button" class="btn btn-outline-danger">Conferma</button>
        </form>
        <button id="cancel-button" class="btn btn-outline-secondary">Annulla</button>
    </div>
</div>

@endsection