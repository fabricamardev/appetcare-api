<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsoMedicamentoController extends Controller
{
    use \App\Http\Controllers\ApiControllerTrait;

    protected $model;
    protected $relationships = ['pet'];

    public function __construct(\App\Models\UsoMedicamento $model) {
        $this->model = $model;
    }
}
