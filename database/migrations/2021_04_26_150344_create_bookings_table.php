<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_ticket', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("class")->nullable();
            $table->string("sex")->nullable();
            $table->string("age")->nullable();
            $table->string("address")->nullable();
            $table->string("contact_no")->nullable();
            $table->string("email")->nullable();
            $table->unsignedBigInteger('train_id');
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('book_ticket');
    }
}
