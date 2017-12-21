<?php

namespace Microblog;

use Illuminate\Database\Eloquent\Model;
use Microblog\Mensagem;

class Comentario extends Model
{
    protected $table = 'comentarios';
    public $timestamps = false;

    protected $fillable = 
    	array('autor', 'comentario', 'msg_id');

    public function mensagem(){
    	return $this->belongsTo('Mensagem');
    }

    }


