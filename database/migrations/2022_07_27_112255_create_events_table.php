<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('details');
            $table->date('date');
            $table->string('time');
            $table->string('location');
            $table->unsignedBigInteger('type');
            $table->json('services');
            $table->unsignedBigInteger('theme_id');
            $table->string('total_cost');
            $table->string('grand_total_cost');
            $table->string('payment_receipt');
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
        Schema::dropIfExists('events');
    }
}
