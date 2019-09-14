<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('idproducto');
            $table->text('producto');
            $table->string('tipo');
            $table->date('caducidad');
            $table->integer('marca_id')->unsigned();
            $table->foreign('marca_id')->references('idmarca')->on('marcas')->onDelete('CASCADE')->onCascade('CASCADE');
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
        Schema::dropIfExists('productos');
    }
}