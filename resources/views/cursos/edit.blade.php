@extends('layouts.layout')

@section('title', "Cursos edit")

@section('content')
    <h1>Aqui podemos editar un curso</h1>
    <form action="{{ route('cursos.update', $curso) }}" method="POST">
        @method('PUT')
        @csrf
        <label for="">
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name',$curso->name) }}">
        </label>
        @error('name')
            <br>
            <small>{{ $message }}</small>
            <br>
        @enderror

        <br>
        <label for="">
            Descripcion:
            <br>
            <textarea name="description" rows="5" >{{ old('description',$curso->description) }}</textarea>
        </label>
        @error('description')
            <br>
            <small>{{ $message }}</small>
            <br>
        @enderror

        <br>
        <label for="">
            Categoria:
            <br>
            <input type="text" name="category" id="" value="{{ old('category', $curso->category) }}">
        </label>
        @error('category')
            <br>
            <small>{{ $message }}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Editar curso</button>
    </form>


@endsection
