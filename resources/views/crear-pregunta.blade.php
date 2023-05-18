@extends('index')

@section('title', 'Page Title')

@section('content')

<div class="contenedor-form">
    <div class="caja">
        <div class="Crear-cuestion">
            <p>Crear pregunta</p>

        </div>
        <div class="estado">
            <p>Estado</p>
            <input type="text">
        </div>
        <div class="Enunciado">Enunciado</div>
        <div>
            <textarea></textarea>
        </div>
        <button class="button-crear">Crear</button>
    </div>

    <div class="zona-message">Zona de mensajes de éxito u error</div>

</div>

@endsection
