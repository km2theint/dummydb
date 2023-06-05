<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_client', function (Blueprint $table) {
            $table->id();
            $table->integer('tenant_id')->unsigned();
            $table->string('name', 128);
            $table->string('domain', 256);
            $table->boolean('is_main_domain')->nullable();
            $table->boolean('is_active')->nullable();
        });
        Schema::table('t_client', function($table) {
            $table->foreign('tenant_id')->references('id')->on('t_tenant')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_client');
    }
}
