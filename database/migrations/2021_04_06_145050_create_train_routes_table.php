<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('train_routes', function (Blueprint $table) {
            $table->id();
            $table->string('Train_No');
            $table->string('Train_Name');
            $table->string('Source_Location');
            $table->dateTime('Departure_Time');
            $table->string('Destination');
            $table->dateTime('Arrival_Time');
            $table->string('Status');
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
        Schema::dropIfExists('train_routes');
    }
}
