<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aircraft_logbook_volume_legs', function (Blueprint $table) {
            $table->id();
            $table->integer('aircraft_logbook_volume_id')->unsigned();
            $table->integer('flight_type_id')->unsigned();
            $table->integer('fuel_unit_id')->unsigned();
            $table->integer('departure_location_id')->unsigned();
            $table->integer('landing_location_id')->unsigned();
            $table->integer('people_on_flight');
            $table->integer('flight_time_ifr');
            $table->integer('flight_time_ifrc');
            $table->integer('flight_time_day');
            $table->integer('flight_time_night');
            $table->integer('cargo_transported');
            $table->string('cargo_transported_unit');
            $table->integer('fuel_total');
            $table->datetime('departure_time');
            $table->datetime('landing_time');
            $table->datetime('engines_start_time');
            $table->datetime('engines_shut_off_time');
            $table->integer('landings');
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
        Schema::dropIfExists('aircraft_logbook_volume_legs');
    }
};
