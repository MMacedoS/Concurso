<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConcursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concurso', function (Blueprint $table) {
            $table->id();
            $table->string('cargo');
            $table->integer('cidade_id');
            $table->foreign('cidade_id')->references('cidade_id')->on('cidade');
            $table->integer('vagas')->nullable();
            $table->string('observacao')->nullable();
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
        Schema::dropIfExists('concurso');
    }
}
