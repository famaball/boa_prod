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
        Schema::create('tracking_maj_operateurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('administrateur')->index();
            $table->string('operateur');
            $table->boolean('type_maj')->default(0);
            $table->dateTime('date_maj')->index()->default('0000-00-00 00:00:00');
            $table->string('champs');
            $table->string('ip_adresse')->nullable();
            $table->string('num_serie')->nullable();
            $table->string('observation')->nullable();
            $table->string('new_value')->nullable();
            $table->string('old_value')->nullable();
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
        Schema::dropIfExists('tracking_maj_operateurs');
    }
};
