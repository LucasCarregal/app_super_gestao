<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    protected $fillable = ['nome','descricao', 'peso', 'unidade_id'];    

    function ProdutoDetalhe(){
        return $this->hasOne('App\ProdutoDetalhe');
    }
}
