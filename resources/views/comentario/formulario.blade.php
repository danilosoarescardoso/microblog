@extends('principal')

@section('conteudo')



<div class="panel panel-default">
  <div class="panel-body">
    <h1>Novo comentário</h1>
  </div>
</div>

@if (count($errors) > 0)
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<input type="hidden" name="_token" value="{{ Session::token() }}">

<div class="panel panel-default">
  <div class="panel-body">
    <h5>Detalhes da mensagem</h5>
  </div>
</div>

<div class="panel panel-info">
  <div class="panel-heading">{{$m->autor}}</div>
  <div class="panel-body">
    {{$m->mensagem}}
  </div>
</div>

<form action="/comentarios/adiciona" method="post">
  <div class="form-group">
    <label>Quem comenta</label>
    <input name="autor" class="form-control"/>
  </div>

  <div class="form-group">
    <label>Comentário</label>
    <input name="comentario" class="form-control"/>
  </div>

  <input type="hidden" name="msg_id" value="{{ $m->id }}">

  <button type="submit" 
    class="btn btn-primary btn-block">Adicionar comentário</button>
</form>

@stop