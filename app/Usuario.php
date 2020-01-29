<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public function post(){
        return $this->hasOne('App\Post', 'id_usuario');
    }
}
