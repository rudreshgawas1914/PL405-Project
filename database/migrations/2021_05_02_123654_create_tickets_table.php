<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('train_id');
            $table->unsignedBigInteger('user_id');
            $table->string("name");
            $table->string("class");
            $table->string("gender")->nullable();
            $table->string("age")->nullable();
            $table->string("address")->nullable();
            $table->string("contact_no")->nullable();
            $table->string("email")->nullable();
            $table->string("status");
            $table->foreign('train_id')->references('id')->on('train_routes');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
