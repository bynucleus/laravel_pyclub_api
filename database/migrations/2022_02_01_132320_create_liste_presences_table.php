<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListePresencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liste_presences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seance_id')->unsigned();
            $table->foreign('seance_id')->references('id')->on('seances');

            // $table->unsignedBigInteger('user_id')->unsigned();
            // $table->foreign('user_id')->references('id')->on('users');
            $table->string('date')->nullable();
            $table->string('nom');


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
        Schema::dropIfExists('liste_presences');
    }
}
