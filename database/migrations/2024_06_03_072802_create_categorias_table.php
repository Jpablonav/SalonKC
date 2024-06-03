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
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Producto_id');
            $table->unsignedBigInteger('Marca_id');
            $table->string('nombre', 30);
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('Producto_id')->references('id')->on('productos')->onDelete('cascade');
            $table->foreign('Marca_id')->references('id')->on('marcas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias');
    }
};
