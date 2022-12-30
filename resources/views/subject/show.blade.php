@extends('layouts.layout')

@section('navegacao', $subject->subjectName)

@section('conteudo-principal')

    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
    <a href="{{'/subject/'.$pagId.'/edit'}}" class="btn btn-danger">Editar</a>
    <a href="{{url('/subject', ['id'=>$subject->id])}}" class="btn btn-warning">{{$subject->subjectName}}</a>
     <form action="{{url('/subject', ['subject'=>$subject->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="button" class="btn btn-success">Excluir</button>
    </form>
    </div>
   

@endsection