<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgendamentoController extends Controller
{
    use \App\Http\Controllers\ApiControllerTrait;
    
    protected $model;
    protected $relationships = ['estabelecimento'];
    
    public function __construct(\App\Models\Agendamento $model) {
        $this->model = $model;
    }
}
