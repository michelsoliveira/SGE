<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Authenticatable
{
    //
    use Notifiable;

    protected $fillable = ['nome', 'email', 'usuario', 'password', 'id_grupo'];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function Grupo()
    {
        return $this->hasOne('app\Grupo','id_grupo','id_grupo');
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    protected $table = 'usuarios';

    protected $primaryKey = 'id_usuario';
}
