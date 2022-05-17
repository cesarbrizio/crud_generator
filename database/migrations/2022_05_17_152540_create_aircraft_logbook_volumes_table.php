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
        Schema::create('aircraft_logbook_volumes', function (Blueprint $table) {
            $table->id();
            $table->integer('aircraft_logbook_id')->unsigned();
            $table->string('preface');
            $table->string('opening_term');
            $table->string('opening_term_observations');
            $table->integer('total_flight_time');
            $table->integer('total_landings');
            $table->integer('total_cycles');
            $table->integer('estimated_next_intervention_start');
            $table->string('closing_term');
            $table->string('closing_term_observations');
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
        Schema::dropIfExists('aircraft_logbook_volumes');
    }
};
