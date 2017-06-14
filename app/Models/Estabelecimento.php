<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estabelecimento extends Model
{
    protected $table = 'estabelecimentos';
    public $timestamps = false;
    protected $fillable = ['nome', 'tipo', 'descricao', 'endereco', 'latitude', 'longitude'];

    public function servicos() {
        return $this->belongsToMany('App\Models\Servico');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
