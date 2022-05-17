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
        Schema::create('aircrafts', function (Blueprint $table) {
            $table->id();
            $table->string('registration');
            $table->string('manufacturer');
            $table->string('model');
            $table->string('serial_number');
            $table->string('icao_type');
            $table->string('aircraft_class');
            $table->string('aircraft_category');
            $table->string('pmd');
            $table->string('gravame_situation');
            $table->date('transfer_date');
            $table->date('sale_date');
            $table->string('validity_ca');
            $table->string('aeronavigability_situation');
            $table->string('aircraft_owner_type');
            $table->string('aircraft_owner_name');
            $table->string('aircraft_owner_cnpj');
            $table->string('aircraft_owner_cpf');
            $table->string('aircraft_operator_name');
            $table->string('aircraft_operator_cnpj');
            $table->string('aircraft_operator_cpf');
            $table->string('aircraft_operator_type');
            $table->string('observations');
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
        Schema::dropIfExists('aircrafts');
    }
};
