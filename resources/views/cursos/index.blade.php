@extends('layouts.template')

@section('title', 'Cursos')

@section('content')
    <h1>Bienvenido a la pagina principal de cursos</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cursos as $curso) 
                <tr>
                    <td>{{$curso -> nombre}}</td>
                    <td>{{$curso -> description}}</td>
                </tr>
            @endforeach
        </tbody>

    </table>
    <a href="{{ url('cursos/create') }}">
        <button>Crear Cursos</button>
    </a>
@endsection
