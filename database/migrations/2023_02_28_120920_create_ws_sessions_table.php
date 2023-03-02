<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_sessions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('session_id')->unique();
            $table->integer('session_time_out');
            $table->dateTime('session_date')->default('0000-00-00 00:00:00');
            $table->dateTime('session_exp_date')->default('0000-00-00 00:00:00');
            $table->boolean('expire')->default(0);
            $table->string('partenaire');
            $table->string('adr_ip_user')->nullable();
            $table->string('agence')->nullable();
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
        Schema::dropIfExists('ws_sessions');
    }
};
