<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeAjudaAquisTable extends Migration
{
    public function up()
    { 
        Schema::create('problema', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_problema');
            $table->integer('local_problema');
            $table->string('descricao_texto', 256);
            $table->timestamps();

        });

        Schema::create('atendimento', function (Blueprint $table) {
            $table->increments('id_atendimento');
            $table->dateTime('data_atendimento');
            $table->date('prazo_estabelecido');
            $table->integer('status_conserto');
            $table->string('descricao_atendimento', 256)->nullable();
            $table->integer('problema_id')->unsigned();
            $table->foreign('problema_id')
                ->references('id')->on('problema');
            $table->timestamps();

        });

        Schema::create('tecnico', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 60);
            $table->string('tipo_tecnico', 20);
            $table->boolean('ocupado');
            $table->timestamps();

        });

        Schema::create('atendimento_tecnico', function (Blueprint $table) {
            $table->integer('atendimento_id')->unsigned();
            $table->integer('tecnico_id');
            $table->primary('atendimento_id', 'tecnico_id');
            $table->foreign('atendimento_id')
                ->references('id')->on('tecnico');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('atendimento_tecnico');
        Schema::drop('tecnico');
        Schema::drop('atendimento');
        Schema::drop('problema');
        Schema::drop('usuario');

    }
}
