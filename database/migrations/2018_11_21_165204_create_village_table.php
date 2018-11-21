<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVillageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('village', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname');
            $table->string('shortname');
            $table->string('zip');
            $table->unsignedInteger('district_id');
            $table->unsignedInteger('region_id');
            $table->foreign('district_id')->references('id')->on('district');
            $table->foreign('region_id')->references('id')->on('region');
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
        Schema::dropIfExists('village');
    }
}
