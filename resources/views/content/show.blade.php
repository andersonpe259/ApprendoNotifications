
@extends('layouts.layout')

@section('navegacao', $content->tittle)
@section('conteudo-principal')

<div class="btn-group" role="group" aria-label="Basic mixed styles example">
  <a href="{{'/content/'.$pagId.'/edit'}}" class="btn btn-danger">Editar</a>
  <form action="{{url('/content/favorite', ['id'=>$content->id])}}" method="POST">
    @csrf
    @method('PUT')
    <button class="btn btn-primary">Favorito</button>
</form>

   <a href="{{url('/content', ['id'=>$content->id])}}" class="btn btn-warning">{{$content->tittle}}</a>
  <form action="{{url('/content', [$content->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="button" class="btn btn-success">Excluir</button>
    </form> 
</div>
   

    
    <p><mark>{{$content->textContent}}</mark></p>

@endsection