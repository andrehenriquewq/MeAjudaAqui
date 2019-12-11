<?php

namespace App\Http\Controllers\Tecnico_control;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Tec_control extends Controller
{
    function home(){
        return view('view_tec.index');
    }
    function solicitacoes(){
        return view('view_tec.solicitacoes');
    }
    function comentario(){
        return view('view_tec.comentario');
    }
}
