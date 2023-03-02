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
        Schema::create('plafond_agences', function (Blueprint $table) {
            $table->increments('id');
            $table->double('plafond_maximum')->default(2000);
            $table->tinyInteger('horaire')->default(0)->nullable();
            $table->double('plafond_e_jour')->default(0)->nullable();
            $table->double('plafond_e_semaine')->default(0)->nullable();
            $table->double('plafond_e_mois')->default(0)->nullable();
            $table->double('plafond_e_an')->default(0)->nullable();
            $table->char('type_plafond_env')->default('0000')->nullable();
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
        Schema::dropIfExists('plafond_agences');
    }
};
