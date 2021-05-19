<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membership_scores', function (Blueprint $table) {
            $table->id();
            $table->string('member_code')->unique();
            $table->integer('score')->nullable()->default('0');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('member_code')->references('code')->on('team_memberships');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membership_scores');
    }
}
