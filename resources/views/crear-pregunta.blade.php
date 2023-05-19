@extends('index')

@section('title', 'Page Title')

@section('content')

<div class="contenedor-form">
    <form action="/quick-list/public/cuestiones" method="post">
    <div class="caja">
        <div class="Crear-cuestion">
            <p id="titulo-crear-pregunta">Crear pregunta</p>
        </div>
        <div class="estado">
            <p>Estado</p>
            <select name="estado" id="select">
                <option value=""></option>
                <option value="VISIBLE">VISIBLE</option>
                <option value="OCULTO">OCULTO</option>
            </select>
        </div>
        <div class="enunciado">Enunciado</div>
        <div>
            <textarea class="textarea" name="enunciado"></textarea>
        </div>
        <div>
            <button class="button-crear" type="submit">Crear</button>

            <div class="zona-message"></div>

        </div>
    </form>
    </div>

    @endsection
