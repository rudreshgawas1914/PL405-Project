<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trainroute_id');
            $table->foreign('trainroute_id')->references('id')->on('train_routes');

            $table->boolean('Seat_1A')->default(false);
            $table->string('Seat_1A_availableseats')->nullable();
            $table->string('Seat_1A_totalseats')->nullable();
            $table->string('Seat_1A_seatprice')->nullable();

            $table->boolean('Seat_2A')->default(false);
            $table->string('Seat_2A_availableseats')->nullable();
            $table->string('Seat_2A_totalseats')->nullable();
            $table->string('Seat_2A_seatprice')->nullable();

            $table->boolean('Seat_3A')->default(false);
            $table->string('Seat_3A_availableseats')->nullable();
            $table->string('Seat_3A_totalseats')->nullable();
            $table->string('Seat_3A_seatprice')->nullable();

            $table->boolean('Seat_FC')->default(false);
            $table->string('Seat_FC_availableseats')->nullable();
            $table->string('Seat_FC_totalseats')->nullable();
            $table->string('Seat_FC_seatprice')->nullable();

            $table->boolean('Seat_CC')->default(false);
            $table->string('Seat_CC_availableseats')->nullable();
            $table->string('Seat_CC_totalseats')->nullable();
            $table->string('Seat_CC_seatprice')->nullable();

            $table->boolean('Seat_SL')->default(false);
            $table->string('Seat_SL_availableseats')->nullable();
            $table->string('Seat_SL_totalseats')->nullable();
            $table->string('Seat_SL_seatprice')->nullable();

            $table->boolean('Seat_2S')->default(false);
            $table->string('Seat_2S_availableseats')->nullable();
            $table->string('Seat_2S_totalseats')->nullable();
            $table->string('Seat_2S_seatprice')->nullable();
            
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
        Schema::dropIfExists('seats');
    }
}
