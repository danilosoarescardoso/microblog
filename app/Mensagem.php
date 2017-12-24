<?php

namespace Microblog;

use Illuminate\Database\Eloquent\Model;
use Microblog\Comentario;

class Mensagem extends Model
{
    //
    protected $table = 'mensagens';
	public $timestamps = false;
    
    protected $fillable = 
    	array('autor', 'mensagem', 'msg_id');

    public function comentario(){
    	return $this->hasMany('Comentario');
    }

}
