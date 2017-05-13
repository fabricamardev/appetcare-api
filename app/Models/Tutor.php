<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $table = 'tutores';
    public $timestamps = false;
    protected $fillable = [ 'nome', 'email', 'telefone', 'cpf'];

    public function endereco() {
        return $this->hasMany('App\Models\Endereco');        
    }
}