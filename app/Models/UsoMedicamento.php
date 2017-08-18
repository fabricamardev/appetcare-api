<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsoMedicamento extends Model
{
    protected $table = 'uso_medicamento';
    public $timestamps = false;
    protected $guarded = [ 'id' ];

    public function pet() {
        return $this->belongsTo('App\Models\Pet');
    }
}
