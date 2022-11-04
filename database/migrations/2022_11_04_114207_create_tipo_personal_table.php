<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoPersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_personal', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->timestamps();

            $table->unsignedBigInteger('id_personal');
            $table->foreign('id_personal')->references('id')->on('personal')->cascadeOnDelete()->cascadeOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_personal');
    }
}
