<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesesPosibles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mes');
            $table->timestamps();
        });

        Schema::create('trabajadores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('id_mes');
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
        Schema::dropIfExists('vacaciones');
    }
}
