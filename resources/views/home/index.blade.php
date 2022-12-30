@extends('layouts.layout')

@section('conteudo-principal')

    <h1>Conteúdos Favoritos</h1>
    @foreach ($content as $item)
        @if($item->favorite == 1)  
            <div class="card d-inline-block" style="width: 18rem;margin-top:5rem">
                <div class="card-body">
                    <h5 class="card-title">{{$item->tittle}}</h5>
                    <a href="{{url('/content', ['id'=>$item->id])}}" class="btn btn-success">Entrar</a>
                </div>
            </div>
        @endif
    @endforeach

    <hr>
    <h1>Todos os Conteúdos</h1>
    @foreach ($content as $item)
        <div class="card d-inline-block" style="width: 18rem;margin-top:5rem">
            <div class="card-body">
                <h5 class="card-title">{{$item->tittle}}</h5>
                <a href="{{url('/content', ['id'=>$item->id])}}" class="btn btn-success">Entrar</a>
            </div>
        </div>

    @endforeach

@endsection