@extends('layouts.layout')

@section('navegacao', 'Conteúdo')

@section('conteudo-principal')
  
        <a href="{{url('/content/create')}}" class="btn btn-outline-dark d-block">Adicionar novo Conteúdo</a> 

    @foreach ($content as $item)

        <div class="card d-inline-block" style="width: 18rem;margin-top:5rem">
            <div class="card-body">
                <h5 class="card-title">{{$item->tittle}}</h5>
                <a href="{{url('/content', ['id'=>$item->id])}}" class="btn btn-success">Entrar</a>
            </div>
        </div>

    @endforeach

@endsection
