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
            $table->string('reference',50)->index();
            $table->string('description', 100)->nullable();
            $table->string('id_maker', 20);
            $table->string('name_maker', 50);
            $table->date('date_maker')->index();
            $table->time('time_maker');
            $table->string('adresse_ip_maker', 50);
            $table->string('activity', 50);
            $table->string('old_value', 250)->nullable();
            $table->string('new_value', 250)->nullable();
            $table->string('id_checker', 20);
            $table->string('name_checker', 50);
            $table->date('date_checker');
            $table->time('time_checker');
            $table->string('adresse_ip_checker', 50);
            $table->integer('type')->nullable();
            $table->string('Structure', 20)->nullable()->index();
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
