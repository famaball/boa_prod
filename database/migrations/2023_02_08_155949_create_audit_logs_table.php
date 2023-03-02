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
        Schema::create('audit_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reference')->index();
            $table->string('description')->nullable();
            $table->string('id_maker');
            $table->string('name_maker');
            $table->date('date_maker')->index();
            $table->time('time_maker');
            $table->string('adresse_ip_maker');
            $table->string('activity');
            $table->string('old_value')->nullable();
            $table->string('new_value')->nullable();
            $table->string('id_checker');
            $table->string('name_checker');
            $table->date('date_checker');
            $table->time('time_checker');
            $table->string('adresse_ip_checker');
            $table->integer('type')->nullable();
            $table->string('structure')->nullable()->index();
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
        Schema::dropIfExists('audit_logs');
    }
};
