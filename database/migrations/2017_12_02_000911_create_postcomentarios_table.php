<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostcomentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postcomentarios', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('comentario');
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('post')->unsigned()->nullable();
            $table->foreign('post')->references('id')->on('post');
            $table->foreign('user_id')->references('id')->on('usuarioperfil');
            $table->index(['post', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postcomentarios');
    }
}
