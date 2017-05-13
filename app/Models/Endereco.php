<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = 'enderecos';
    public $timestamps = false;
    protected $fillable = [ 'logradouro', 'numero', 'cep', 'bairro', 'cidade', 'uf', 'tutor_id' ];

    public function tutor() {
        return $this->belongsTo('App\Models\Tutor');
    }
}
