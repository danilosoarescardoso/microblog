@extends('principal')

@section('conteudo')

 @if(empty($mensagens))
  <div class="alert alert-danger">
    Você não tem nenhuma mensagem cadastrada.
  </div>

 @else
  <h1>Listagem de mensagens</h1>
  <table class="table table-striped table-bordered table-hover">
    <tr>
      <th>Autor</th>
      <th>Mensagens</th>
      <th>Detalhes</th>
      <th>Apagar</th>

    </tr>
    @foreach ($mensagens as $m)
    <tr>
      <td> {{$m->autor}} </td>
      <td> {{$m->mensagem}} </td>
      <td> 
        <a href="/mensagens/mostra/{{$m->id}}">
          <span class="glyphicon glyphicon-eye-open"></span>
        </a>
      </td>
      <td> 
        <a href="/mensagens/remove/{{$m->id}}">
          <span class="glyphicon glyphicon-trash"></span>
        </a>
      </td>
    </tr>
    @endforeach
  </table>
 @endif

@stop