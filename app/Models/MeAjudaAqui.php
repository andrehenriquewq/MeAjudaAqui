<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MeAjudaAqui extends Model
{
    protected $table = 'problema';
    protected $fillable = [
        'tipo_problema', 'local_problema', 'descricao_texto'
    ];


    public static $tiposDeProblemas = [
        1 => 'Estrutura',
        2 => 'Energia',
        3 => 'Ar-Condicionado',
        4 => 'internet'
    ];
    public static $localDeProblemas = [
        1 => 'Sala 01',
        2 => 'Sala 02',
        3 => 'Sala 03',
        4 => 'Laboratório 01',
        5 => 'Laboratório 02',
        6 => 'Laboratório 03',
        7 => 'Refeitório'
    ];
    // Getter para tipo de problema (texto)
    public function getTipoProblema(){
        return self::$tiposDeProblemas[$this->tipo_problema];
    }

    public function getLocalProblema(){
        return self::$localDeProblemas[$this->local_problema];
    }
}
