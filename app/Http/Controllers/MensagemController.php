<?php namespace Microblog\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Microblog\Mensagem;
use Microblog\Comentario;
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

    public function remove($id){
        $mensagem = Mensagem::find($id);
        $mensagem-> delete();
        return redirect()->action('MensagemController@lista');

    }

    public function mostra($id){

        $mensagens = DB::select('select * from mensagens where id = ?', [$id]);
        $antigos = Comentario::where('msg_id', $id)->get();
        //'select * from comentarios where msg_id = ?', [$id]
        
        if(empty($mensagens)) {
            return "Este comentário não é permitido";
        }
        return view('mensagem.detalhes')
        ->with('m', $mensagens[0])
        ->with('c', $antigos);
    }
}
