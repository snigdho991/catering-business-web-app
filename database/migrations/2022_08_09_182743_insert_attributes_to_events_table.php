<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertAttributesToEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->longText('feedback')->nullable();
            $table->unsignedBigInteger('total_services');
            $table->unsignedBigInteger('services_completed')->default(0);
            $table->string('status')->default('Pending/Not Assigned');
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
            $table->dropColumn('employee_id');
            $table->dropColumn('feedback');
            $table->dropColumn('total_services');
            $table->dropColumn('services_completed');
            $table->dropColumn('status');
        });
    }
}
