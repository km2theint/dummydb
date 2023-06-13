<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_account', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email', 256)->nullable()->unique();
            $table->unsignedBigInteger('tenant_id');
            $table->unsignedBigInteger('client_id');
            $table->string('name', 64);
            $table->boolean('is_active')->nullable()->default(1);
            $table->string('token', 256);
            $table->datetime('token_limitation');
            $table->text('user_info');
            $table->datetime('atime');
            $table->datetime('ctime')->nullable();
        });
        Schema::table('t_account', function($table) {
            $table->foreign('tenant_id')->references('id')->on('t_tenant')->onDelete('cascade')->nullable();
            $table->foreign('client_id')->references('id')->on('t_client')->onDelete('cascade')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_account');
    }
}
