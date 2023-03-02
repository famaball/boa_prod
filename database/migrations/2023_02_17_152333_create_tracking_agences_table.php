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
        Schema::create('tracking_agences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_agence')->nullable();
            $table->dateTime('date_effet')->nullable();
            $table->smallInteger('plafond_activer')->nullable();
            $table->dateTime('date_insertion')->nullable();
            $table->string('code_operateur')->nullable();
            $table->double('plafond_maximum')->nullable()->default(0);
            $table->smallInteger('bloquer_emission')->nullable();
            $table->string('code_agence_specifique')->nullable()->default('');
            $table->smallInteger('type_operation')->nullable()->default(0);
            $table->string('code_province')->nullable();
            $table->string('code_commune')->nullable();
            $table->tinyInteger('auto_trans_ag')->nullable()->default(0);
            $table->string('numero_serie')->nullable();
            $table->string('numero_session')->nullable();
            $table->string('adresse_ip')->nullable();
            $table->double('part_emission_agence')->nullable()->default(0);
            $table->double('part_payement_agence')->nullable()->default(0);
            $table->double('part_reseau_agence')->nullable()->default(0);
            $table->boolean('nbe_compense_semaine')->nullable()->default(0);
            $table->string('code_agence_bgfi')->nullable();
            $table->string('chapitre_compte')->nullable();
            $table->string('compte_delta')->nullable();
            $table->string('cle_compte')->nullable();
            $table->boolean('est_agence_principale')->nullable()->default(0);
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
        Schema::dropIfExists('tracking_agences');
    }
};
