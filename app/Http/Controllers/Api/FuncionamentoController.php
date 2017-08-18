<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FuncionamentoController extends Controller
{
    use \App\Http\Controllers\ApiControllerTrait;
    
    protected $model;
    protected $relationships = ['estabelecimento'];
    
    public function __construct(\App\Models\Funcionamento $model) {
        $this->model = $model;
    }
}
