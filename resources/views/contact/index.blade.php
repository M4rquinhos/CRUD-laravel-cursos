@extends('layouts.layout')

@section('title', 'Contact us')

@section('content')
    <h1>Dejanos un mensaje</h1>
    <form action="{{ route('contact.store') }}" method="POST">
        @csrf

        <label for="">
            Nombre:
            <br>
            <input type="text" name="name" id="">
        </label>
        @error('name')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror

        <br>

        <label for="">
            Email:
            <br>
            <input type="email" name="email" id="">
        </label>
        @error('email')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror

        <br>

        <label for="">
            Mensaje:
            <br>
            <textarea name="message" rows="4"></textarea>
        </label>
        @error('message')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror

        <br>

        <input type="submit" value="Enviar mensaje">

    </form>
    <br>

    @if (session('info'))
        <script>
            alert('{{ session('info') }}');
        </script>
    @endif

@endsection
