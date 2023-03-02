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
        Schema::create('agence_tmps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_agence')->unique();
            $table->string('designation');
            $table->string('ville');
            $table->boolean('differe')->default(0);
            $table->string('structure');
            $table->string('region');
            $table->boolean('equipe')->default(1);
            $table->string('agence_r')->nullable();
            $table->string('code_agence_specifique');
            $table->string('adresse');
            $table->smallInteger('repliquer')->default(0);
            $table->smallInteger('bloquer_emission')->default(0);
            $table->smallInteger('plafond_activer')->default(0);
            $table->double('plafond')->default(2000);
            $table->dateTime('date_effet')->nullable();
            $table->boolean('active')->default(1);
            $table->double('cumul')->default(0);
            $table->boolean('payement_distance')->default(0)->nullable();
            $table->double('plafond_maximum')->default(2000);
            $table->string('code_adm-ctrl')->nullable();
            $table->double('situation')->default(0)->nullable();
            $table->double('part_com_agence')->default(0)->nullable();
            $table->double('part_emission_agence')->default(0)->nullable();
            $table->double('part_payement_agence')->default(0)->nullable();
            $table->double('part_reseau_agence')->default(0)->nullable();
            $table->double('situation_old')->default(0)->nullable();
            $table->double('cumul_old')->default(0)->nullable();
            $table->double('part_deposit_master_d')->default(0)->nullable();
            $table->string('numero_compte_virtuel_ag')->nullable();
            $table->string('telephone_agence')->nullable();
            $table->string('fax_agence')->nullable();
            $table->string('email_agence')->nullable();
            $table->string('code_province')->nullable();
            $table->string('code_commune')->nullable();
            $table->boolean('auto_trans')->default(0)->nullable();
            $table->boolean('nbe_compense_semaine')->default(3)->nullable();
            $table->double('montant_max_par_compense')->default(0)->nullable();
            $table->double('montant_max_par_semaine')->default(0)->nullable();
            $table->boolean('active_vente_carte_ag')->default(0)->nullable();
            $table->dateTime('date_compense_ag')->default('0000-00-00 00:00:00')->nullable();
            $table->dateTime('date_maj_compense_ag')->default('0000-00-00 00:00:00')->nullable();
            $table->boolean('nbe_compense_eff')->default(0)->nullable();
            $table->string('agence_master')->nullable()->nullable();
            $table->double('cumul_compense_eff')->default(0)->nullable();
            $table->boolean('is_m_distribeur')->default(0)->nullable();
            $table->boolean('is_master_agence')->default(0)->nullable();
            $table->boolean('check_ag_multi_login')->default(0)->nullable();
            $table->string('code_agence_bgfi')->nullable();
            $table->string('chapitre_compte')->nullable();
            $table->string('compte_delta')->nullable();
            $table->string('cle_compte')->nullable();
            $table->boolean('est_agence_principale')->default(0)->nullable();
            $table->string('cle_transport_fond')->nullable();
            $table->string('cle_cions_envoi')->nullable();
            $table->string('cle_trf')->nullable();
            $table->string('cle_tva')->nullable();
            $table->string('cle_autre_taxe')->nullable();
            $table->string('cle_transit_acc')->nullable();
            $table->string('cle_credit_divers')->nullable();
            $table->string('cle_cions_recep')->nullable();
            $table->string('cle_transport_fond_recep')->nullable();
            $table->boolean('horaire')->default(0)->nullable();
            $table->double('plafond_e_jour')->default(0)->nullable();
            $table->double('plafond_e_semaine')->default(0)->nullable();
            $table->double('plafond_e_mois')->default(0)->nullable();
            $table->double('plafond_e_an')->default(0)->nullable();
            $table->char('type_plafond_env')->default('0000')->nullable();
            $table->boolean('is_solde_commun')->default(0);
            $table->boolean('own_compte_agence_bgfi')->default(0)->nullable();
            $table->string('code_agence_liaison')->nullable();
            $table->boolean('send_pin_sms')->default(0)->nullable();
            $table->boolean('send_pwd_sms')->default(0)->nullable();
            $table->boolean('activer_pin_envoi')->default(0)->nullable();
            $table->boolean('activer_pin_payement')->default(0)->nullable();
            $table->boolean('traite')->default(0)->nullable();
            $table->string('operateur_create')->nullable();
            $table->string('operateur_valide')->nullable();
            $table->dateTime('date_valide_rejet')->nullable();

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
        Schema::dropIfExists('agence_tmps');
    }
};
