<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EstabelecimentoController extends Controller
{
    use \App\Http\Controllers\ApiControllerTrait;

    protected $model;
    protected $relationships = [];

    public function __construct(\App\Models\Estabelecimento $model) {
        $this->model = $model;
    }
}
