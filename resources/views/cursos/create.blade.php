@extends('layouts.template')

@section('title', 'Crear Cursos')

@section('content')
    <h1>Crear Curso</h1>
    <form method="POST" action="/cursos/create_curso">
        @csrf
        <div>
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre" />
        </div>
        <div>
            <label for="description">Descripcion: </label>
            <textarea name="description" id="description"></textarea>
        </div>
        <input type="submit" value="crear" />
    </form>
@endsection
