<?php

namespace Microblog;

use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
    //
    protected $table = 'mensagens';
	public $timestamps = false;
    
    protected $fillable = 
    	array('autor', 'mensagem');
}
