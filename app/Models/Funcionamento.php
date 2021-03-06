<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionamento extends Model
{
    protected $table = 'funcionamento';
    public $timestamps = false;
    protected $guarded = [ 'id' ];

    public function estabelecimento()
    {
        return $this->belongsTo('App\Models\Estabelecimento');
    }
}
