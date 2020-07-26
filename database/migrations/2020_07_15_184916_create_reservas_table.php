<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
          $table->id();
          $table->date('dataIN');
          $table->date('dataOUT');
          $table->double('valor');
          $table->bigInteger('numeroCartao');
          $table->string('nomeCartao');
          $table->foreignId('quartos_id')->references('id')->on('quartos');
          $table->foreignId('usuarios_id')->references('id')->on('users');
          $table->foreignId('estabelecimentos_id')->references('id')->on('estabelecimentos');
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
        Schema::dropIfExists('reservas');
    }
}
