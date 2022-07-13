<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->char('intention_status', 1);
            $table->char('da_status', 1);
            $table->char('ctf_status', 1);
            $table->char('techno_seminar_status', 1);
            $table->char('techno_ws_status', 1);
            $table->char('startupDay1_status', 1);
            $table->char('startupDay2_status', 1);
            $table->char('semnas_status', 1);;
            $table->char('semnas_paper_status', 1);
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
        Schema::dropIfExists('tickets');
    }
}
