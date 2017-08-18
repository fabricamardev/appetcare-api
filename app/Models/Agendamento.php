<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    protected $table = 'agendamento';
    public $timestamps = false;
    protected $guarded = [ 'id' ];
}
