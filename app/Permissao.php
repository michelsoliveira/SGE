<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permissao extends Model
{
    //

    protected $fillable = ['area', 'descricao'];

    protected $table = 'permissoes';
}
