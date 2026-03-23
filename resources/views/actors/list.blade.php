@extends('layouts.app')

@section('name', 'Lista de Actores')

@section('content')
<div class="glass-panel">
    <h1>{{$name}} @if(isset($count)) <span class="badge badge-info">{{$count}}</span> @endif</h1>

    @if($actors->isEmpty())
        <div class="alert alert-danger">No se han encontrado actores</div>
    @else
        <div class="film-grid">
            @foreach($actors as $actor)
                <div class="film-card">
                    <div class="film-image-container">
                        <img src="{{ $actor['img_url'] }}" class="film-image" alt="{{ $actor['name'] }}">
                    </div>
                    <div class="film-info">
                        <div class="film-title">{{ $actor['name'] }} {{ $actor['surname'] }}</div>
                        <div class="film-meta"><strong>País:</strong> {{ $actor['country'] }}</div>
                        <div class="film-meta"><strong>Nacimiento:</strong> {{ $actor['birthdate'] }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    <div class="mt-4">
        <a href="/" class="btn btn-primary">Volver al Inicio</a>
    </div>
</div>

@endsection
