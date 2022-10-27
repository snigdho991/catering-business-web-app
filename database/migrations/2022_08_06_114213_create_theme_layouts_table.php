<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThemeLayoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('theme_layouts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('service_type_id');
            $table->json('layout_file');
            $table->longText('layout_image');
            $table->string('price');
            $table->boolean('custom')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('theme_layouts');
    }
}
