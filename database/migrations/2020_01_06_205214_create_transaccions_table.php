<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaccions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_cliente');
            $table->integer('id_empleado');
            $table->decimal('debito_dinero',12,2);
            $table->decimal('debito_galones',12,2);
            $table->decimal('credito_actual',12,2);
            $table->decimal('credito_final',12,2);
            $table->timestamps();
            $table->string('descripcion');
            $table->string('token');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaccions');
    }
}
