<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamMembershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_memberships', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('team_code')->unique();
            $table->string('user_username')->unique();
            $table->enum('status', ['CAP', 'MOD', 'MBR'])->default('MBR');
            $table->timestamps();
            $table->softDeletes();

            // $table->unsignedBigInteger('team_code')->unique();
            // $table->foreign('team_code')->references('code')->on('teams');
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
        Schema::dropIfExists('team_memberships');
    }
}