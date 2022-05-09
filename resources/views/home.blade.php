@extends('templates.welcome')

@section('pageTitle', 'DC Comics - Home Page')
    
@section('pageContent')
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div>
            <a href="{{ route('comics.index') }}" class="d-block text-center"><img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/logo.png" alt="DC Comics" class="w-50"></a>
            <h1 class="mt-5"><a href="{{ route('comics.index') }}" class="text-decoration-none text-primary">Scopri i fumetti della collezione</a></h1>
        </div>
    </div>
@endsection