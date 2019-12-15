<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeAjudaAquisTable extends Migration
{
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->integer('tipo_usuario');
            $table->timestamps();
        });

        Schema::create('problema', function (Blueprint $table) {
            $table->increments('id_problema');
            $table->integer('tipo_problema');
            $table->string('local_problema', 50);
            $table->string('descricao_texto', 256);
            $table->integer('usuario_id_usuario')->unsigned();
            $table->foreign('usuario_id_usuario')
                ->references('id_usuario')->on('usuario');
            $table->timestamps();

        });

        Schema::create('atendimento', function (Blueprint $table) {
            $table->increments('id_atendimento');
            $table->dateTime('data_atendimento');
            $table->date('prazo_estabelecido');
            $table->integer('status_conserto');
            $table->string('descricao_atendimento', 256)->nullable();
            $table->integer('problema_id_problema')->unsigned();
            $table->foreign('problema_id_problema')
                ->references('id_problema')->on('problema');
            $table->timestamps();

        });

        Schema::create('tecnico', function (Blueprint $table) {
            $table->increments('id_tecnico');
            $table->string('nome', 60);
            $table->string('tipo_tecnico', 20);
            $table->boolean('ocupado');
            $table->timestamps();

        });

        Schema::create('atendimento_tecnico', function (Blueprint $table) {
            $table->integer('atendimento_id_atendimento')->unsigned();
            $table->integer('tecnico_id_tecnico');
            $table->primary('atendimento_id_atendimento', 'tecnico_id_tecnico');
            $table->foreign('atendimento_id_atendimento')
                ->references('id_tecnico')->on('tecnico');
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
