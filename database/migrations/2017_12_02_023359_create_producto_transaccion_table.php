<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoTransaccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_transaccion', function (Blueprint $table) {
            $table->integer('transaccion')->unsigned()->nullable();
            $table->foreign('transaccion')->references('id')
                  ->on('transaccion')->onDelete('cascade');

            $table->integer('producto')->unsigned()->nullable();
            $table->foreign('producto')->references('id')
                  ->on('productos')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
            $table->primary(['producto', 'transaccion']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto_transaccion');
    }
}
