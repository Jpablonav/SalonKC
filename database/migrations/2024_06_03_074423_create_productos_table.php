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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('empleado_id');
            $table->string('nombre_producto', 50);
            $table->string('marca', 25);
            $table->string('servicio_tipo');  // Ajustar según el tipo de datos adecuado
            $table->string('duracion_tipo');  // Ajustar según el tipo de datos adecuado
            $table->string('descripcion', 30);
            $table->string('categoria', 30);
            $table->double('precio');
            $table->string('imagen', 128);
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('empleado_id')->references('id')->on('empleados')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
