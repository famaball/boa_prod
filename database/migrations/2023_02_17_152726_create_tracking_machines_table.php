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
        Schema::create('tracking_machines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_serie');
            $table->dateTime('date_nta')->nullable();
            $table->string('code_operateur')->nullable();
            $table->string('code_agence')->nullable();
            $table->string('agence_cible')->nullable();
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
        Schema::dropIfExists('tracking_machines');
    }
};
