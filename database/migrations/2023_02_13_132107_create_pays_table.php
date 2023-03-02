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
        Schema::create('pays', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_pays');
            $table->string('indicatif');
            $table->string('designation');
            $table->char('zone')->nullable();
            $table->smallInteger('international')->default(0);
            $table->integer('longueur_telephone')->nullable();
            $table->integer('indicatif_telephone')->nullable();
            $table->string('designation_anglais')->nullable();
            $table->string('zone_geographique')->default('000')->nullable();
            $table->string('nom_zone_geographique')->nullable();
            $table->string('iso_code')->nullable()->index();
            $table->boolean('actif_vers_me')->nullable()->default(0);
            $table->boolean('alerte_sms')->default(0);
            $table->string('iso_code_num')->nullable();
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
        Schema::dropIfExists('pays');
    }
};
