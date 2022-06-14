<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docente_cursos', function (Blueprint $table) {
            $table->id();
            $table->string('cantidad_alumnos');
            $table->unsignedBigInteger('docente_id');
            $table->unsignedBigInteger('curso_id');
            $table->foreign('docente_id')->references('id')->on('docentes');
            $table->foreign('curso_id')->references('id')->on('cursos');
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
        Schema::dropIfExists('docente_cursos');
    }
};
