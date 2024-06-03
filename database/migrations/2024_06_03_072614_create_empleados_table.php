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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('especialidad', 15);
            $table->string('telefono', 12);
            $table->string('email', 30);
            $table->string('contrasena', 30);
            $table->string('direccion', 30);
            $table->string('tipo_usuario', 15);
            $table->string('status', 15);
            $table->string('imagen', 256);
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
        Schema::dropIfExists('empleados');
    }
};
