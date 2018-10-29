<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePouzivateliaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pouzivatelia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('meno');
            $table->string('priezvisko');
            $table->string('IBAN')->nullable();
            $table->string('mesto');
            $table->string('adresa');
            $table->string('mail');
            $table->mediumText('heslo');
            $table->string('telefon');
            $table->string('telefon2')->nullable();
            $table->integer('opravnenie');
            $table->unsignedInteger('kancelaria_id')->nullable();
            $table->foreign('kancelaria_id')->references('id')->on('kancelaria');
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
        Schema::dropIfExists('pouzivatelia');
    }
}
