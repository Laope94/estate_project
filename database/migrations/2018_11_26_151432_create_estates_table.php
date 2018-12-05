<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('street')->nullable();
            $table->integer('area');
            $table->decimal('price');
            $table->integer('room_number')->nullable();
            $table->integer('floors')->nullable();
            $table->string('issale');
            $table->string('pictures')->nullable();
            $table->longText('description');
            $table->unsignedInteger('estate_type_id');
            $table->unsignedInteger('users_id')->nullable();
            $table->unsignedInteger('village_id')->nullable();
            $table->unsignedInteger('agency_id')->nullable();
            $table->string('UUID');
            $table->foreign('agency_id')->references('id')->on('agencies')->onDelete('cascade');
            $table->foreign('estate_type_id')->references('id')->on('estate_types');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('village_id')->references('id')->on('villages');
            $table->rememberToken();
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
        Schema::dropIfExists('inzerat');
    }
}



