<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('surname');
            $table->string('IBAN')->nullable();;
            $table->string('address');
            $table->string('email');
            $table->string('password');
            $table->string('phone');
            $table->string('phone2')->nullable();
            $table->string('UUID');
            $table->integer('privilege');
            $table->unsignedInteger('agency_id')->nullable();
            $table->unsignedInteger('village_id')->nullable();
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
        Schema::dropIfExists('users');
    }
}
