@extends('principal')

@section('conteudo')

<h1>Detalhes da mensagem {{$m->id}} </h1>

<ul>
  <li>
    <b>Autor:</b>  {{$m->autor}} 
  </li>
  <li>
    <b>Descrição:</b> {{$m->mensagem}}  	
  </li><br>
</ul>

@if(count($c) >= 1)

<h3>Comentários Antigos</h3>
  
  @foreach ($c as $comentario)

    <ul>
      <li>
        <b>Quem comentou</b>  {{$comentario->autor}} 
      </li>
      <li>
        <b>Comentário</b> {{$comentario->comentario}}    
      </li><br>

    </ul>
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