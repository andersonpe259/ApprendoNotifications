@extends('layouts.layout')

@section('conteudo-principal')

    
    <form action="{{url('/subject', ['subject'=>$subject->id])}}" method="POST">
    @csrf
    @method('PUT')

    <label>Matéria</label>
    <input type="text" name="subject" id="subject" value="{{$subject->subjectName}}">
    <label>Imagem</label>
    <input type="text" name="img" id="img" value="{{$subject->imgLink}}">
    <button>Entrar</button>

</form>

@endsection

