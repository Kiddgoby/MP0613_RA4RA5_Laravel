@extends('layouts.app')

@section('name', 'Lista de Peliculas')

@section('content')
<div class="glass-panel">
    <h1>{{$name}}</h1>

    @if(empty($films))
        <div class="alert alert-danger">No se ha encontrado ninguna película</div>
    @else
        <div class="film-grid">
            @foreach($films as $film)
                <div class="film-card">
                    <div class="film-image-container">
                        <img src="{{$film['img_url']}}" class="film-image" alt="{{$film['name']}}">
                    </div>
                    <div class="film-info">
                        <div class="film-title">{{$film['name']}}</div>
                        <div class="film-meta">{{$film['genre']}}</div>
                        <div class="film-meta">{{$film['year']}} &bull; {{$film['duration']}} min</div>
                        <div class="film-meta">{{$film['country']}}</div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>