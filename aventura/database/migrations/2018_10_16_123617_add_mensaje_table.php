<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMensajeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('mensajes', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('state',['0','1','2'])->default('0');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email');
            $table->string('telefono')->nullable();
            $table->longText('descripcion');
            $table->rememberToken();
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
        //
    }
}
