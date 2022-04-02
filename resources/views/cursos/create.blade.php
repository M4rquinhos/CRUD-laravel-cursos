@extends('layouts.layout')

@section('title', 'Cursos Create')

@section('content')
    <h1>Aqui podemos crear un curso</h1>

    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf
        <label for="">
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name') }}">
        </label>
        @error('name')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>

        <label for="">
            Descripcion:
            <br>
            <textarea name="description" rows="5">{{ old('description') }}</textarea>
        </label>
        @error('description')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror

        <br>

        <label for="">
            Categoria:
            <br>
            <input type="text" name="category" id="" value="{{ old('category') }}">
        </label>
        @error('category')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror

        <br>

        <button type="submit">Agregar curso</button>
    </form>

@endsection
