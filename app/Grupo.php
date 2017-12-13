<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    //

    protected $fillable = ['nome', 'descricao', 'id_permissao'];

    public function Permissao()
    {
        return $this->hasMany('app\Permissao', 'id_permissao', 'id_permissao');
    }

    protected $table = 'grupos';
}
