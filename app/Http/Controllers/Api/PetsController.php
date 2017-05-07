<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PetsController extends Controller
{
    use \App\Http\Controllers\ApiControllerTrait;

    protected $model;
    protected $relationships = ['tutor', 'raca'];

    public function __construct(\App\Models\Pet $model) {
        $this->model = $model;
    }
}
