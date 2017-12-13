<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Authenticatable
{
    //
    use Notifiable;

    protected $fillable = ['nome', 'email', 'usuario', 'senha', 'id_grupo'];

    public function Grupo()
    {
        return $this->hasOne('app\Grupo','id_grupo','id_grupo');
    }


}
