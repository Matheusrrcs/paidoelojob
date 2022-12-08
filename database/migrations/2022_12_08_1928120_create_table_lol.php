<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
     
    public function up()
    {
        Schema::create('lol_eloboosts', function (Blueprint $table) {
            $table->id();
            $table->string('nome_jogo');
            $table->string('tipo_jogo');
            $table->string('descricao');
            $table->timestamps();
        });
    }

 
    public function down()
    {
        Schema::dropIfExists('lol_eloboost');
    }
};
