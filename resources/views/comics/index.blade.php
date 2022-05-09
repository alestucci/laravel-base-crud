@extends('templates.base')

@section('pageTitle', 'Comics')

@section('pageContent')
<ul>
    @foreach ($comics as $comic)
        <li>{{ $comic->title }}</li>
    @endforeach
</ul>

{{ $comics->links() }}

@endsection