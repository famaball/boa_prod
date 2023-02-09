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
        Schema::create('delta_account_agences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cle_transport_fond', 2)->nullable();
            $table->string('cle_cions_envoi', 2)->nullable();
            $table->string('cle_trf', 2)->nullable();
            $table->string('cle_tva', 2)->nullable();
            $table->string('cle_autre_taxe', 2)->nullable();
            $table->string('cle_transit_acc', 2)->nullable();
            $table->string('cle_credit_divers', 2)->nullable();
            $table->string('cle_cions_recep', 2)->nullable();
            $table->string('cle_transport_fond_recep', 2)->nullable();
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
        Schema::dropIfExists('delta_account_agences');
    }
};
