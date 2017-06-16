<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $table = 'servicos';
    public $timestamps = false;
    protected $fillable = ['nome', 'descricao', 'valor', 'estabelecimento_id'];

    public function estabelecimento() {
        return $this->belongsTo('App\Models\Estabelecimento');
    }
}
