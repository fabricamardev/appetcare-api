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

    public function horariosDisponiveis($id, $data) {
        $estabelecimento = $this->model->with(['funcionamento', 'agendamento'])->find($id);
        
        $estabelecimento->agendamento = \App\Models\Agendamento::where('estabelecimento_id', $id)->where('data', $data)->get();

        $de_manha = $estabelecimento->funcionamento['de_manha'];
        $ate_manha = $estabelecimento->funcionamento['ate_manha'];
        $de_tarde = $estabelecimento->funcionamento['de_tarde'];
        $ate_tarde = $estabelecimento->funcionamento['ate_tarde'];
    
        $horarios = [];

        while ($ate_manha > $de_manha) {
            $horario = $de_manha . "h às " . ($de_manha += 1) . "h";

            if (count($estabelecimento->agendamento) > 0) {
                foreach ($estabelecimento->agendamento as $agendamento) {
                    if ($data == $agendamento['data']) {
                        if ($horario !== $agendamento['horario']) {
                            array_push($horarios, $horario);
                        } 
                    }           
                }
            } else {
                array_push($horarios, $horario);
            }
        }

        while ($ate_tarde > $de_tarde) {
            $horario = $de_tarde . "h às " . ($de_tarde += 1) . "h";

            if (count($estabelecimento->agendamento) > 0) {
                foreach ($estabelecimento->agendamento as $agendamento) {
                    if ($data == $agendamento['data']) {
                        if ($horario !== $agendamento['horario']) {
                            array_push($horarios, $horario);
                        } 
                    }
                }    
            } else {
                array_push($horarios, $horario);
            }
        }

        return response()->json(['horarios' => $horarios]);
    }
}
