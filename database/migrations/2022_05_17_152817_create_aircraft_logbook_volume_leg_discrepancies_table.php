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
        Schema::create('aircraft_logbook_volume_leg_discrepancies', function (Blueprint $table) {
            $table->id();
            $table->integer('aircraft_logbook_volume_leg_id')->unsigned();
            $table->integer('detected_location_id')->unsigned();
            $table->integer('detected_staff_id')->unsigned();
            $table->integer('release_location_id')->unsigned();
            $table->integer('release_responsible_staff_id')->unsigned();
            $table->integer('release_captain_acceptance_staff_id')->unsigned();
            $table->enum('status', ['open', 'closed']);
            $table->string('discrepancy');
            $table->date('detected_date');
            $table->string('detected_next_intervention_type');
            $table->integer('detected_estimated_next_intervention_time');
            $table->date('release_date');
            $table->string('corrective_action');
            $table->date('release_responsible_date');
            $table->date('release_captain_acceptance_date');
            $table->integer('release_estimated_next_intervention_time');
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
        Schema::dropIfExists('aircraft_logbook_volume_leg_discrepancies');
    }
};
