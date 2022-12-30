@extends('layouts.layout')

@section('conteudo-principal')

    
    <form action="{{url('/content', ['content'=>$content->id])}}" method="POST">
    @csrf
    @method('PUT')

    <label>Título</label>
    <input type="text" name="tittle" id="tittle" value="{{$content->tittle}}">
    <label>Conteúdo</label>
    <input type="text" name="textContent" id="textContent" value="{{$content->textContent}}">
    <button>Salvar</button>

</form>

@endsection