<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntradaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrada', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('cantidad');
            $table->string('nro_ofi');
            $table->timestamps();

            $table->unsignedBigInteger('id_personal');
            $table->foreign('id_personal')->references('id')->on('personal')->cascadeOnDelete()->cascadeOnUpdate();

            $table->unsignedBigInteger('id_producto');
            $table->foreign('id_producto')->references('id')->on('producto')->cascadeOnDelete()->cascadeOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entrada');
    }
}
