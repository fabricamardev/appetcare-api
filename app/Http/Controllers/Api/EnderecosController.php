<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EnderecosController extends Controller
{
        use \App\Http\Controllers\ApiControllerTrait;

    protected $model;

    public function __construct(\App\Models\Endereco $model) {
        $this->model = $model;
    }
}
