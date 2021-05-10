<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersOnDogadajsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_on_dogadajs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userID');
            $table->foreignId('dogadajID');
            $table->timestamps();


            $table->foreign('userID')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('dogadajID')->references('id')->on('dogadajs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_on_dogadajs');
    }
}
