@extends('layouts.layout')

@section('conteudo-principal')

    <form action="{{url('/content')}}" method="POST">
        @csrf

        <label>Título</label>
        <input type="text" name="content_tittle" id="content_tittle">
        <label>Conteúdo</label>
        <input type="text" name="content" id="content">
        <button>Enviar</button>
    </form>

@endsection