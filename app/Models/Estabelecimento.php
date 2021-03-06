<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estabelecimento extends Model
{
    protected $table = 'estabelecimentos';
    public $timestamps = false;
    protected $fillable = ['image', 'nome', 'email', 'tipo', 'descricao', 'endereco', 'latitude', 'longitude'];

    public function servico() {
        return $this->hasMany('App\Models\Servico');
    }

    public function funcionamento() {
        return $this->hasOne('App\Models\Funcionamento');
    }

    public function agendamento() {
        return $this->hasMany('App\Models\Agendamento');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
