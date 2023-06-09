<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTStandardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_standard', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('account_id');
            $table->unsignedBigInteger('client_id');
            $table->integer('year')->nullable();
            $table->integer('month')->nullable();
            $table->integer('count')->nullable();
            $table->integer('amount')->nullable();
            $table->integer('cost')->nullable();
            $table->foreign('account_id')->references('id')->on('t_account')->onDelete('cascade');
            $table->foreign('client_id')->references('id')->on('t_client')->onDelete('cascade');
            $table->datetime('ctime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_standard');
    }
}
