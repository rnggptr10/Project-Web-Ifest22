<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCtfFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ctf_forms', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('team_name');
            $table->string('team_leader');
            $table->string('team_leader_institute');
            $table->string('team_leader_id_card');
            $table->string('team_member_1')->nullable();
            $table->string('team_member_1_institute')->nullable();
            $table->string('team_member_1_id_card')->nullable();
            $table->string('team_member_2')->nullable();
            $table->string('team_member_2_institute')->nullable();
            $table->string('team_member_2_id_card')->nullable();
            $table->string('proof_payment');
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
        Schema::dropIfExists('ctf_forms');
    }
}
