<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Raca extends Model
{
    protected $table = 'racas';
    public $timestamps = false;
    protected $fillable = ['especie_id', 'nome'];

    public function especie() {
        return $this->belongsTo('App\Models\Especie');
    }
}
