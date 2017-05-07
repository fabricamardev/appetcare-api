<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $table = 'tutores';
    public $timestamps = false;
    protected $fillable = [ 'nome', 'email', 'telefone', 'cpf', 'endereco_id' ];

    public function endereco() {
        return $this->belongsTo('App\Models\Endereco');
    }
}