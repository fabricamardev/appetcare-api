<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $table = 'servicos';
    public $timestamps = false;
    protected $fillable = ['nome', 'descricao', 'valor'];

    public function estabelecimentos() {
        return $this->belongsToMany('App\Models\Estabelecimento');
    }
}
