<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('day'); // almacenaremos los dias de la semana del 1 al 7
            $table->boolean('active');  // se almacenara los numeros 0 y 1 -> Activo / Inactivo
            $table->time('morning_start'); // la hora que inicia en la mañana
            $table->time('morning_end');  // La hora que finaliza en la mañana
            $table->time('afternoon_start'); // la hora que inicia en la tarde
            $table->time('afternoon_end');  // La hora que finaliza en la tarde

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            
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
        Schema::dropIfExists('horarios');
    }
}
