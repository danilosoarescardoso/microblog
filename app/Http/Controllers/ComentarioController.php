<?php

namespace Microblog\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Microblog\Comentario;
use Microblog\Http\Requests\ComentarioRequest;

class ComentarioController extends Controller
{
    // criar novo comentário
    public function novo($id){

    	$mensagens = DB::select('select * from mensagens where id = ?', [$id]);


    	if(empty($mensagens)) {
    	    return "Essa mensagem não existe";
    	}

        return view('comentario.formulario')->with('m', $mensagens[0]);

    }

    public function adiciona(ComentarioRequest $request){

        Comentario::create($request->all());

        return redirect()->action('MensagemController@lista');    
        }
}
