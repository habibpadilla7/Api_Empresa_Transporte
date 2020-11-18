<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->Integer('company_id');
            $table->string('plaque');
            $table->string('motor');
            $table->string('chassis');
            $table->string('model');
            $table->string('registrationDate');
            $table->string('seatedPassengers');
            $table->string('standingPassengers');
            $table->string('weight');
            $table->string('dry');
            $table->string('grossWeight');
            $table->string('numberDoors');
            $table->string('brand');
            $table->string('line');
            $table->Integer('state_id');
            $table->timestamps();

           /* $table->string('company_id')->references('id')->on('companys');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
