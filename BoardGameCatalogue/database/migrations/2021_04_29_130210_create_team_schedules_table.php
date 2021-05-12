<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_schedules', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('member_code_1');
            $table->string('member_code_2');
            $table->string('status')->nullable();
            $table->dateTimeTz('fight_at');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('member_code_1')->references('code')->on('team_memberships');
            $table->foreign('member_code_2')->references('code')->on('team_memberships');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team_schedules');
    }
}
