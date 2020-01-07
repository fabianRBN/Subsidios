<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');   
            $table->string('apellido');
            $table->string('cedula');
            $table->integer('id_estado_cliente');
            $table->string('telefono');
            $table->char('genero',2);
            $table->string('token');
            $table->integer('edad');
            $table->decimal('credito_actual',12,2);
            $table->decimal('credito_total',12,2);
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
        Schema::dropIfExists('clientes');
    }
}
