@extends('principal')

@section('conteudo')

<h1>Nova Mensagem</h1>

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

<form action="/mensagens/adiciona" method="post">
  <div class="form-group">
    <label>Autor</label>
    <input name="autor" class="form-control"/>
  </div>

  <div class="form-group">
    <label>Mensagem</label>
    <input name="mensagem" class="form-control"/>
  </div>

  <button type="submit" 
    class="btn btn-primary btn-block">Adicionar</button>
</form>

@stop