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
            $table->string('team_code');
            $table->string('user_username');
            $table->enum('status', ['CAP', 'MOD', 'MBR'])->default('MBR');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('team_code')->references('code')->on('teams');
            $table->foreign('user_username')->references('username')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('team_memberships');
    }
}
