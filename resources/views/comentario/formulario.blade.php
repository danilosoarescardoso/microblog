@extends('principal')

@section('conteudo')

<h1>Novo comentário</h1>

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

<h5>Detalhes da mensagem</h5>

<ul>
  <li>
    <b>Autor:</b>  {{$m->autor}} 
  </li>
  <li>
    <b>Descrição:</b> {{$m->mensagem}}    
  </li><br>

</ul>

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