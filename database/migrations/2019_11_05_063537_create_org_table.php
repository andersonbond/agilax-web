<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('org', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->string('bio');
            $table->string('photo');
            $table->string('slug');
            $table->string('status');
            $table->string('lat');
            $table->string('lng');
            $table->string('location');
            $table->string('address');
            $table->string('phone_number');
            $table->integer('domain_id');
            $table->integer('is_city_planning');
            $table->integer('is_command_center');
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
        Schema::dropIfExists('org');
    }
}
