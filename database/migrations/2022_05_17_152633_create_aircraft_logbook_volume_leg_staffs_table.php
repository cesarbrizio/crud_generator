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
        Schema::create('aircraft_logbook_volume_leg_staffs', function (Blueprint $table) {
            $table->id();
            $table->integer('aircraft_logbook_volume_leg_id')->unsigned();
            $table->integer('staff_id')->unsigned();
            $table->integer('duty_id')->unsigned();
            $table->integer('arrival_location_id')->unsigned();
            $table->datetime('arrival_time');
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
        Schema::dropIfExists('aircraft_logbook_volume_leg_staffs');
    }
};
