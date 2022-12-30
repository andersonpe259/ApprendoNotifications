@extends('layouts.layout')

@section('conteudo-principal')

    <form action="{{url('/subject')}}" method="POST">
        @csrf

        <label>Matéria</label>
        <input type="text" name="subject" id="subject">
        <label>Imagem</label>
        <input type="text" name="img" id="img">
        <button>Enviar</button>
    </form>

@endsection