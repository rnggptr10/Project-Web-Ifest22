<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSemnasPapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semnas_papers', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('name');
            $table->string('institute');
            $table->string('abstract_link');
            $table->char('status_selected', 1)->nullable();
            $table->char('status_pembayaran', 1)->nullable();
            $table->string('proof_payment')->nullable();
            $table->string('paper1_link')->nullable();
            $table->string('paper2_link')->nullable();
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
        Schema::dropIfExists('semnas_papers');
    }
}
