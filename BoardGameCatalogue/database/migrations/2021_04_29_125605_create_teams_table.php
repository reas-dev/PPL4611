<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('game_code')->unique();
            $table->string('name');
            $table->string('icon');
            $table->timestamps();
            $table->softDeletes();

            // $table->unsignedBigInteger('game_code')->unique();
            // $table->foreign('game_code')->references('code')->on('games');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
