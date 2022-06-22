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
            $table->string('team_member_1')->nullable();
            $table->string('team_member_2')->nullable();
            $table->string('proposal_link');
            $table->string('id_card')->nullable()->default(null);
            $table->char('selected_team', 1);
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
