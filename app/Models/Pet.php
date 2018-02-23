<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Pet extends Model
{
    protected $table = 'pets';
    public $timestamps = false;
    protected $fillable = [ 'tutor_id', 'raca_id', 'nome', 'data_nascimento', 'image', 'peso', 'obs', 'sexo'  ];

    public function tutor() {
        return $this->belongsTo('App\Models\Tutor');
    }

    public function raca() {
        return $this->belongsTo('App\Models\Raca');
    }

    public function setDataNascimentoAttribute($value) {
        $this->attributes['data_nascimento'] = Carbon::createFromFormat('d/m/Y', $value)->toDateString();
    }
}
