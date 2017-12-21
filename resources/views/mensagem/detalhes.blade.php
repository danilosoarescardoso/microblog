@extends('principal')

@section('conteudo')

<h1>Detalhes da mensagem {{$m->id}} </h1>

<ul>
  <li>
    <b>Autor:</b> R$ {{$m->autor}} 
  </li>
  <li>
    <b>Descrição:</b> {{$m->mensagem}} 
</ul>

@stop