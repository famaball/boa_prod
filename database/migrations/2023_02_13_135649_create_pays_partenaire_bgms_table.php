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
        Schema::create('pays_partenaire_bgms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_zone_envoi')->nullable();
            $table->string('code_pays_iso2')->nullable()->index();
            $table->string('code_pays_iso3')->nullable()->index();
            $table->string('code_operateur_envoi')->nullable();
            $table->string('code_structure_envoi')->nullable()->index();
            $table->string('code_agence_envoi')->nullable();
            $table->string('code_operateur_payement')->nullable();
            $table->string('code_structure_payement')->nullable()->index();
            $table->string('code_agence_payement')->nullable();
            $table->char('code_devise_pays')->nullable();
            $table->char('code_devise_me_pays')->nullable();
            $table->string('code_produit')->nullable();
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
        Schema::dropIfExists('pays_partenaire_bgms');
    }
};
