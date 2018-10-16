<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInformacionEmpresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('informacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('direccion')->nullable();
            $table->string('telefono')->nullable();
            $table->string('telefono2')->nullable();
            $table->integer('album_id')->unsigned();
            $table->foreign('album_id')->references('id')->on('albumes')->onDelete('cascade');
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
