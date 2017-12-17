<?php

namespace Microblog\Http\Controllers;
use Microblog\Mensagem;
use Illuminate\Http\Request;
use Microblog\Http\Requests\MensagemRequest;

class MensagemController extends Controller
{
    //

    public function lista(){
    	$mensagens = Mensagem::all();

    	return view ('mensagem.listagem')->with('mensagens', $mensagens);
    }

    public function novo(){
      return view('mensagem.formulario');
    }

    public function adiciona(MensagemRequest $request){

        Mensagem::create($request->all());

        return redirect()
            ->action('MensagemController@lista');    
        }
}
