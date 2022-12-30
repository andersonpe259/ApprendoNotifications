@extends('layouts.layout')

@section('navegacao', 'Matéria')

@section('conteudo-principal')
    
    
        <a href="{{url('/subject/create')}}" class="btn btn-outline-dark d-block">Adicionar nova Matéria</a>
    

    @foreach ($subject as $item)

        <div class="card d-inline-block" style="width: 18rem;margin-top:5rem">
            <img src="{{$item->imgLink}}" class="card-img-top" alt="public\img\withoutPhoto.jpg">
            <div class="card-body">
                <h5 class="card-title">{{$item->subjectName}}</h5>
                <a href="{{url('/subject', ['id'=>$item->id])}}" class="btn btn-warning">Entrar</a>
            </div>
        </div>

    @endforeach

@endsection