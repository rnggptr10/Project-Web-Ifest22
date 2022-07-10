<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntentionFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intention_forms', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('team_name');
            $table->string('team_leader');
            $table->string('team_leader_institute');
            $table->string('team_leader_id_card');
            $table->string('team_member_1');
            $table->string('team_member_1_institute');
            $table->string('team_member_1_id_card');
            $table->string('team_member_2');
            $table->string('team_member_2_institute');
            $table->string('team_member_2_id_card');
            $table->string('team_member_3')->nullable();
            $table->string('team_member_3_institute')->nullable();
            $table->string('team_member_3_id_card')->nullable();
            $table->string('team_member_4')->nullable();
            $table->string('team_member_4_institute')->nullable();
            $table->string('team_member_4_id_card')->nullable();
            $table->string('proof_payment');
            $table->char('status_pembayaran', 1);
            $table->string('proposal_link')->nullable();
            $table->string('app_link')->nullable();
            $table->char('status_finalist', 1);
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
        Schema::dropIfExists('intention_forms');
    }
}
