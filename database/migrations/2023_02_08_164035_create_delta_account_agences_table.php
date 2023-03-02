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
            $table->string('cle_transport_fond')->nullable();
            $table->string('cle_cions_envoi')->nullable();
            $table->string('cle_trf')->nullable();
            $table->string('cle_tva')->nullable();
            $table->string('cle_autre_taxe')->nullable();
            $table->string('cle_transit_acc')->nullable();
            $table->string('cle_credit_divers')->nullable();
            $table->string('cle_cions_recep')->nullable();
            $table->string('cle_transport_fond_recep')->nullable();
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
