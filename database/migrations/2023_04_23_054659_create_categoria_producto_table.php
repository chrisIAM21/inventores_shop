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
        Schema::create('categoria_producto', function (Blueprint $table) {
            $table->foreignId('categoria_id')->constrained(); // El constraint es para que no se pueda borrar una categoria que tenga productos asociados
            $table->foreignId('producto_id')->constrained()->onDelete('cascade'); // El cascade es para que se borren los productos asociados a una categoria
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoria_producto');
    }
};
