<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{
    protected $table = 'especies';
    public $timestamps = false;
    protected $fillable = ['nome'];

    public function raca() {
        return $this->hasMany('App\Models\Raca');
    }
}
