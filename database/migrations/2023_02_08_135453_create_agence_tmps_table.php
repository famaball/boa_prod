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
            $table->string('code_agence',20)->unique();
            $table->string('designation',200);
            $table->string('ville',200);
            $table->boolean('differe')->default(0);
            $table->string('structure',20);
            $table->string('region',20);
            $table->boolean('equipe')->default(1);
            $table->string('agence_r',20)->nullable();
            $table->string('code_agence_specifique',20);
            $table->string('adresse',250);
            $table->smallInteger('repliquer')->default(0);
            $table->smallInteger('bloquer_emission')->default(0);
            $table->smallInteger('plafond_activer')->default(0);
            $table->double('plafond')->default(2000);
            $table->dateTime('date_effet')->nullable();
            $table->boolean('active')->default(1);
            $table->double('cumul')->default(0);
            $table->boolean('payement_distance')->default(0)->nullable();
            $table->double('plafond_maximum')->default(2000);
            $table->string('code_adm-ctrl',5)->nullable();
            $table->double('situation')->default(0)->nullable();
            $table->double('part_com_agence')->default(0)->nullable();
            $table->double('part_emission_agence')->default(0)->nullable();
            $table->double('part_payement_agence')->default(0)->nullable();
            $table->double('part_reseau_agence')->default(0)->nullable();
            $table->double('situation_old')->default(0)->nullable();
            $table->double('cumul_old')->default(0)->nullable();
            $table->double('part_deposit_master_d')->default(0)->nullable();
            $table->string('numero_compte_virtuel_ag',20)->nullable();
            $table->string('telephone_agence',20)->nullable();
            $table->string('fax_agence',20)->nullable();
            $table->string('email_agence',50)->nullable();
            $table->string('code_province',10)->nullable();
            $table->string('code_commune',10)->nullable();
            $table->boolean('auto_trans')->default(0)->nullable();
            $table->boolean('nbe_compense_semaine')->default(3)->nullable();
            $table->double('montant_max_par_compense')->default(0)->nullable();
            $table->double('montant_max_par_semaine')->default(0)->nullable();
            $table->boolean('active_vente_carte_ag')->default(0)->nullable();
            $table->dateTime('date_compense_ag')->default('0000-00-00 00:00:00')->nullable();
            $table->dateTime('date_maj_compense_ag')->default('0000-00-00 00:00:00')->nullable();
            $table->boolean('nbe_compense_eff')->default(0)->nullable();
            $table->string('agence_master',14)->nullable()->nullable();
            $table->double('cumul_compense_eff')->default(0)->nullable();
            $table->boolean('is_m_distribeur')->default(0)->nullable();
            $table->boolean('is_master_agence')->default(0)->nullable();
            $table->boolean('check_ag_multi_login')->default(0)->nullable();
            $table->string('code_agence_bgfi',5)->nullable();
            $table->string('chapitre_compte',10)->nullable();
            $table->string('compte_delta',15)->nullable();
            $table->string('cle_compte',3)->nullable();
            $table->boolean('est_agence_principale')->default(0)->nullable();
            $table->string('cle_transport_fond',2)->nullable();
            $table->string('cle_cions_envoi',2)->nullable();
            $table->string('cle_trf',2)->nullable();
            $table->string('cle_tva',2)->nullable();
            $table->string('cle_autre_taxe',2)->nullable();
            $table->string('cle_transit_acc',2)->nullable();
            $table->string('cle_credit_divers',2)->nullable();
            $table->string('cle_cions_recep',2)->nullable();
            $table->string('cle_transport_fond_recep',2)->nullable();
            $table->boolean('horaire')->default(0)->nullable();
            $table->double('plafond_e_jour')->default(0)->nullable();
            $table->double('plafond_e_semaine')->default(0)->nullable();
            $table->double('plafond_e_mois')->default(0)->nullable();
            $table->double('plafond_e_an')->default(0)->nullable();
            $table->char('type_plafond_env',4)->default('0000')->nullable();
            $table->boolean('is_solde_commun')->default(0);
            $table->boolean('own_compte_agence_bgfi')->default(0)->nullable();
            $table->string('code_agence_liaison',14)->nullable();
            $table->boolean('send_pin_sms')->default(0)->nullable();
            $table->boolean('send_pwd_sms')->default(0)->nullable();
            $table->boolean('activer_pin_envoi')->default(0)->nullable();
            $table->boolean('activer_pin_payement')->default(0)->nullable();
            $table->boolean('traite')->default(0)->nullable();
            $table->string('operateur_create',20)->nullable();
            $table->string('operateur_valide',20)->nullable();
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
