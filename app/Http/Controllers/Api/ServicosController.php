<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServicosController extends Controller
{
    use \App\Http\Controllers\ApiControllerTrait;

    protected $model;
    protected $relationships = ['estabelecimento'];

    public function __construct(\App\Models\Servico $model) {
        $this->model = $model;
    }
}
