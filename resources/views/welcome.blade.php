@extends('layouts.app')

@section('name', 'Inicio')

@section('content')

<div class="glass-panel">
    <h1>Lista de Peliculas</h1>

    @if(isset($error) || session('error'))
        <div class="alert alert-danger">
            {{ $error ?? session('error') }}
        </div>
    @endif

    <ul>
        <li><a href="/filmout/oldFilms">Pelis antiguas</a></li>
        <li><a href="/filmout/newFilms">Pelis nuevas</a></li>
        <li><a href="/filmout/films">Pelis</a></li>
        <li><a href="/filmout/filmsGenre">Películas por género</a></li>
        <li><a href="/filmout/filmsYear">Películas por año</a></li>
        <li><a href="/filmout/sortFilms">Ordenar Películas</a></li>
        <li><a href="/actorout/actors">Actores</a></li>
        <li>
            <div class="mt-2 mb-2">Buscar actores por década:</div>
            <form action="{{ route('actorsByDecade') }}" method="GET" class="d-flex align-items-center">
                <select name="decade" id="decade" class="form-control w-auto">
                    <option value="">Selecciona una década</option>
                    <option value="1980">1980-1989</option>
                    <option value="1990">1990-1999</option>
                    <option value="2000">2000-2009</option>
                    <option value="2010">2010-2019</option>
                    <option value="2020">2020-2029</option>
                </select>
                <button type="submit" class="btn btn-primary ml-2">Buscar</button>
            </form>
        </li>
        <li><a href="/actorout/countActors">Contar Actores</a></li>
    </ul>
</div>

<div class="glass-panel">
    <h2>Añadir Película</h2>
    <form action="{{ route('film') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nombre" required>
        <input type="text" name="year" placeholder="Año" required>
        <input type="text" name="genre" placeholder="Género" required>
        <input type="text" name="duration" placeholder="Duración (min)" required>
        <input type="text" name="country" placeholder="País" required>
        <input type="text" name="img_url" placeholder="URL de la imagen" required>

        <button type="submit" class="btn btn-primary mt-3 w-100">Crear Película</button>
    </form>
</div>

@endsection
