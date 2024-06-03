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
        Schema::create('venta_detalles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('producto_id');
            $table->unsignedBigInteger('venta_id');
            $table->date('orden_fecha');
            $table->date('orden_pago');
            $table->date('orden_envio');
            $table->integer('num_guia');
            $table->integer('shipper_id');
            $table->string('estado', 20);
            $table->string('categoria', 30);
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade');
            $table->foreign('venta_id')->references('id')->on('ventas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venta_detalles');
    }
};
