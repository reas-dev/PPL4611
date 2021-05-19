<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_likes', function (Blueprint $table) {
            $table->id();
            $table->string('game_code')->unique();
            $table->string('user_username')->unique();
            $table->timestamps();
            $table->softDeletes();

            // $table->unsignedBigInteger('game_code')->unique();
            // $table->foreign('game_code')->references('code')->on('games');
            // $table->unsignedBigInteger('user_username');
            // $table->foreign('user_username')->references('username')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_likes');
    }
}
