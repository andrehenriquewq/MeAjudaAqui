<?php

namespace App\Http\Controllers\User_control;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function home(){
       return view('view_user.index');
   }
   public function informar_problema(){
       return view('view_user.form-problema');
   }
   public function solicitacoes_pendentes(){
       return view('view_user.table-historico');
   }
}
