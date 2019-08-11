<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('site_name');
            $table->string('site_name_nepali')->nullable();
            $table->string('email');
            $table->string('phone_number');
            $table->string('phone_number_nepali')->nullable();            
            $table->string('emergency_number');
            $table->string('emergency_number_nepali')->nullable();
            $table->string('address');
            $table->string('address_nepali')->nullable();
            $table->string('header_logo_center');
            $table->string('header_logo_right');
            $table->string('top_nav_color');
            $table->string('main_nav_color');
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
        Schema::dropIfExists('settings');
    }
}
