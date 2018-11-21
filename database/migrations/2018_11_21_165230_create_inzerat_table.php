<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInzeratTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inzerat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nadpis');
            $table->string('ulica')->nullable();
            $table->integer('plocha');
            $table->decimal('cena');
            $table->integer('pocet_izieb');
            $table->integer('poschodie');
            $table->longText('fotografie');
            $table->longText('popis');
            $table->unsignedInteger('typ_nehnutelnosti_id');
            $table->unsignedInteger('pouzivatelia_id')->nullable();
            $table->unsignedInteger('okres_id')->nullable();
            $table->unsignedInteger('village_id')->nullable();
            $table->unsignedInteger('kancelaria_id')->nullable();
            $table->foreign('kancelaria_id')->references('id')->on('kancelaria');
            $table->foreign('typ_nehnutelnosti_id')->references('id')->on('typ_nehnutelnosti');
            $table->foreign('pouzivatelia_id')->references('id')->on('pouzivatelia');
            $table->foreign('okres_id')->references('id')->on('okres');
            $table->foreign('village_id')->references('id')->on('village');
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
