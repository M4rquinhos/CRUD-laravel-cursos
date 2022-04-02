@extends('layouts.layout')

@section('title', "Curso de $curso->name")

@section('content')
    <h1>bienvenido al curso: {{ $curso->name }}</h1>

    <a href="{{ route('cursos.index') }}">Inicio</a>
    <a href="{{ route('cursos.edit', $curso) }}">Editar curso</a>

    <p><strong>Categoria:</strong> {{ $curso->category }}</p>
    <p>{{ $curso->description }}</p>


    <form action="{{ route('cursos.destroy', $curso) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar curso</button>
    </form>
@endsection
