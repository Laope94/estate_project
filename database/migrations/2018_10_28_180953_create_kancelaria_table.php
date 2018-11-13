<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKancelariaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kancelaria', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nazov');
            $table->string('konatel');
            $table->string('adresa');
            $table->string('telefon');
            $table->string('telefon2')->nullable();
            $table->string('mail');
            $table->string('IBAN');
            $table->string('ICO');
            $table->string('DIC');
            $table->string('remember_token');
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
        Schema::dropIfExists('kancelaria');
    }
}
