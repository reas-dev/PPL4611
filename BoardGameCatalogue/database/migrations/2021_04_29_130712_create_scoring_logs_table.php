<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoringLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scoring_logs', function (Blueprint $table) {
            $table->id();
            $table->string('scorer_code');
            // $table->string('target_code');
            $table->string('schedule_code')->unique();
            $table->string('score');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('scorer_code')->references('code')->on('team_memberships');
            // $table->foreign('target_code')->references('code')->on('team_memberships');
            $table->foreign('schedule_code')->references('code')->on('team_schedules');
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
        Schema::dropIfExists('scoring_logs');
    }
}
