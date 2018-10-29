<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOkresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('okres', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nazov');
            $table->unsignedInteger('kraj_id');
            $table->foreign('kraj_id')->references('id')->on('kraj');
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
        Schema::dropIfExists('okres');
    }
}
