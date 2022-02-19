<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seance_id')->unsigned();
            $table->foreign('seance_id')->references('id')->on('seances');
        
            // $table->unsignedBigInteger('user_id')->unsigned();
            // $table->foreign('user_id')->references('id')->on('users');
            $table->string('titre')->nullable();
            $table->string('nom');
            $table->string('contenu');

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
        Schema::dropIfExists('notes');
    }
}
