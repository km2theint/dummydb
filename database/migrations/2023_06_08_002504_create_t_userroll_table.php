<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTUserrollTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_userroll', function (Blueprint $table) {
            $table->id();
            $table->integer('account_id')->unsigned();
            $table->integer('roll_id')->unsigned();
        });
        Schema::table('t_userroll', function($table) {
            $table->foreign('account_id')->references('id')->on('t_account')->onDelete('cascade');
        });
        Schema::table('t_userroll', function($table) {
            $table->foreign('roll_id')->references('id')->on('m_roll')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_userroll');
    }
}
