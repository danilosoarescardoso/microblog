@extends('principal')

@section('conteudo')



<div class="panel panel-default">
  <div class="panel-body">
    <h1>Detalhes da mensagem {{$m->id}} </h1>
  </div>
</div>

  <div class="panel panel-info">
  <div class="panel-heading">{{$m->autor}}</div>
  <div class="panel-body">
    {{$m->mensagem}}
  </div>
</div>

@if(count($c) >= 1)

<h3>Comentários Antigos</h3>
  
  @foreach ($c as $comentario)

  <div class="panel panel-default">
    <div class="panel-heading">{{$comentario->autor}}</div>
    <div class="panel-body">
      {{$comentario->comentario}} 
    </div>
  </div>

  @endforeach

@else

<div class="alert alert-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  Nenhum comentário criado até o momento
</div>


@endif

  <a href="/comentarios/novo/{{$m->id}}">
  	<button type="button" class="btn btn-secondary">Comentar 
  		<span class="glyphicon glyphicon-comment"></span>
  	</button>
  </a>


<button type="button" class="btn btn-secondary">Curtir <span class="glyphicon glyphicon-thumbs-up"></span></button>



@stop