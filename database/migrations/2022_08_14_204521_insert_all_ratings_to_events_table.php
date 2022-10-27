<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertAllRatingsToEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->float('event_ratings')->nullable();
            $table->float('theme_ratings')->nullable();
            $table->float('employee_ratings')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn('event_ratings');
            $table->dropColumn('theme_ratings');
            $table->dropColumn('employee_ratings');
        });
    }
}
