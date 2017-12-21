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

  <a href="/comentarios/novo/{{$m->id}}">
  	<button type="button" class="btn btn-secondary">Comentar 
  		<span class="glyphicon glyphicon-comment"></span>
  	</button>
  </a>


<button type="button" class="btn btn-secondary">Curtir <span class="glyphicon glyphicon-thumbs-up"></span></button>

</ul>

@stop