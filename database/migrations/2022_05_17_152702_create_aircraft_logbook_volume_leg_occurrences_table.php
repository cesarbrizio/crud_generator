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
        Schema::create('aircraft_logbook_volume_leg_occurrences', function (Blueprint $table) {
            $table->id();
            $table->integer('aircraft_logbook_volume_leg_id')->unsigned();
            $table->integer('abnormal_occurrence_type_id')->unsigned();
            $table->integer('occurrence_location_id')->unsigned();
            $table->string('occurence_location_coordinates');
            $table->string('occurrence');
            $table->string('description');
            $table->datetime('occurrence_date');
            $table->string('legally_interested_contact_type');
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
        Schema::dropIfExists('aircraft_logbook_volume_leg_occurrences');
    }
};
