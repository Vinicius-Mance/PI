<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  /*
   alterações feitas:
  coluna 'adm' agora é tiny integer (era integer) e não nulo
  coluna 'receber_info' agora é tiny integer
  delete essas mensagens no próximo commit
  ou atualize-as caso haja mais alguma alteração nesta migration
  */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
          $table->id();
          $table->string('nome');
          $table->string('email')->unique();
          $table->string('senha');
          $table->bigInteger('tel')->nullable();
          $table->string('foto')->nullable();
          $table->bigInteger('cpf')->nullable();
          $table->string('cidade')->nullable();
          $table->string('pais')->nullable();
          $table->date('data_nasc')->nullable();
          $table->tinyInteger('receber_info')->nullable();
          $table->tinyInteger('adm');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
