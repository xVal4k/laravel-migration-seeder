<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Agency', 100)->nullable();
            $table->string('Departure_station', 150);
            $table->string('Arrival_station', 150);
            $table->time('Departure_time');
            $table->time('Arrival_time');
            $table->string('Train', 100);
            $table->integer('Carriages')->nullable();
            $table->integer('Delay')->nullable();
            $table->boolean('Cancelled')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
