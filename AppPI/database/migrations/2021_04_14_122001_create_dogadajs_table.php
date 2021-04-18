<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDogadajsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dogadajs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userID');
            $table->string('naziv');
            $table->string('opis');
            $table->date('datum');
            $table->time('vrijeme_pocetka');
            $table->integer('broj_ljudi');
            $table->string('potrebna_oprema');
            $table->timestamps();

            $table->foreign('userID')->references('id')->on('users')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dogadajs');
    }
}
