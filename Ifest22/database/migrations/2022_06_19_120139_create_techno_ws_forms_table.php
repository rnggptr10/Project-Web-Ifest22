<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechnoWsFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('techno_ws_forms', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('team_name');
            $table->string('team_leader');
            $table->string('team_leader_institute');
            $table->string('team_leader_id_card');
            $table->string('team_member_1');
            $table->string('team_member_1_institute');
            $table->string('team_member_1_id_card');
            $table->string('team_member_2')->nullable();
            $table->string('team_member_2_institute')->nullable();
            $table->string('team_member_2_id_card')->nullable();
            $table->string('proposal_link')->nullable();
            $table->string('proof_payment')->nullable();
            $table->char('status_pembayaran', 1);
            $table->char('selected_team', 1);
            $table->string('pitcdeck1_link')->nullable();
            $table->string('pitcdeck2_link')->nullable();
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
        Schema::dropIfExists('techno_ws_forms');
    }
}
