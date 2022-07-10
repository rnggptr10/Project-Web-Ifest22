<?php

use Facade\Ignition\Tabs\Tab;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('da_forms', function (Blueprint $table) {
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
            $table->string('proof_payment');
            $table->string('paper_link')->nullable(); //
            $table->string('analytics_result')->nullable(); //
            $table->char('status_pembayaran', 1); //
            $table->char('status_finalist', 1); //
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
        Schema::dropIfExists('da_forms');
    }
}
