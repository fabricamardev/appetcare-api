<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TutoresController extends Controller
{
    use \App\Http\Controllers\ApiControllerTrait;

    protected $model;
    protected $relationships = ['endereco'];

    public function __construct(\App\Models\Tutor $model) {
        $this->model = $model;
    }
}
