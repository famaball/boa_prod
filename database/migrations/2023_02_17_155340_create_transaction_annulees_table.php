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
        Schema::create('transaction_annulees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_transaction')->unique();
            $table->double('montant')->default(0);
            $table->double('taxe')->default(0);
            $table->double('frais')->default(0);
            $table->double('frais_tel_ou_liv')->default(0);
            $table->dateTime('date_depot')->default('0000-00-00 00:00:00')->index();
            $table->dateTime('date_payement')->default('0000-00-00 00:00:00');
            $table->smallInteger('delai')->default(0);
            $table->string('client_a_identifier');
            $table->char('type_piece');
            $table->string('numero_piece');
            $table->string('question_secrete');
            $table->string('reponse_secrete');
            $table->string('id_emetteur')->nullable()->default(0);
            $table->string('id_recepteur')->nullable()->default(0);
            $table->string('code_operateur_depot')->index();
            $table->string('code_operateur_payement')->nullable()->index();
            $table->boolean('retour')->default(0);
            $table->boolean('type_transaction')->nullable()->default(1);
            $table->char('pays_destination');
            $table->string('code_agence_retrait');
            $table->boolean('faxer')->default(0);
            $table->boolean('contrainte')->default(0);
            $table->boolean('a_valider')->default(0);
            $table->double('montant_payement')->default(0);
            $table->double('emission_devise')->default(0);
            $table->double('payement_devise')->default(0);
            $table->double('taxe_devise')->default(0);
            $table->text('motif');
            $table->double('taux_change')->nullable()->default(0);
            $table->double('commission_devise_payement')->nullable();
            $table->integer('deja_pris')->default(0);
            $table->double('tob')->default(0);
            $table->double('taux_du_jour')->default(0);
            $table->string('zone_envoi')->index();
            $table->string('zone_payement')->index();
            $table->string('pays_envoi')->index();
            $table->string('structure_envoi')->index();
            $table->string('structure_payement')->index();
            $table->string('agence_envoi')->index();
            $table->string('agence_payement')->index();
            $table->string('pays_payement')->index();
            $table->string('autre_numero_transaction')->nullable();
            $table->string('autre_numero_partenaire')->nullable();
            $table->string('ville_payement')->nullable();
            $table->string('etat_payement')->nullable();
            $table->double('commission_partenaire')->nullable()->default(0);
            $table->string('observations')->nullable();
            $table->string('code_agent_initiateur')->nullable();
            $table->string('raison')->nullable();
            $table->char('symbole_devise_payement')->nullable();
            $table->char('symbole_devise_emission')->nullable();
            $table->integer('devise_emission')->nullable();
            $table->integer('devise_payement')->nullable();
            $table->string('ref_bancaire_envoi')->nullable();
            $table->string('ref_bancaire_payement')->nullable();
            $table->double('part_etat_de')->nullable()->default(0);
            $table->double('part_emission_de')->nullable()->default(0);
            $table->double('part_payement_de')->nullable()->default(0);
            $table->double('part_reseau_de')->nullable()->default(0);
            $table->double('part_groupe_de')->nullable()->default(0);
            $table->double('part_marketing_de')->nullable()->default(0);
            $table->dateTime('payee_le')->nullable()->default('0000-00-00 00:00:00');
            $table->string('payee_par')->nullable();
            $table->double('part_emission')->nullable()->default(0);
            $table->double('part_etat')->nullable()->default(0);
            $table->boolean('commission_traite')->nullable()->default(0);
            $table->double('part_etat_dp')->default(0);
            $table->double('part_emission_dp')->default(0);
            $table->double('part_payement_s_ag')->nullable()->default(0);
            $table->double('part_payement_des_ag')->nullable()->default(0);
            $table->double('part_payement_dps_ag')->nullable()->default(0);
            $table->double('part_payement_m_ag')->nullable()->default(0);
            $table->double('part_payement_dem_ag')->nullable()->default(0);
            $table->double('part_payement_dpm_ag')->nullable()->default(0);
            $table->double('tob1')->nullable()->default(0);
            $table->double('tob2')->nullable()->default(0);
            $table->string('ref_trans')->nullable();
            $table->boolean('genere_a')->nullable()->default(0);
            $table->double('montant_ttf')->nullable()->default(0);
            $table->double('montant_beacde')->nullable()->default(0);
            $table->double('montant_beacur')->nullable()->default(0);
            $table->double('montant_beacdp')->nullable()->default(0);
            $table->double('montant_beacus')->nullable()->default(0);
            $table->string('zone_destination')->nullable();
            $table->boolean('genere_e')->nullable()->default(0);
            $table->string('id_session_envoi')->nullable();
            $table->string('numero_serie_envoi')->nullable();
            $table->string('adr_ip_envoi')->nullable();
            $table->string('id_piece_emetteur')->nullable();
            $table->string('code_type_piece_emetteur')->nullable();
            $table->string('mobile_emetteur')->nullable();
            $table->string('code_operateur_telco')->nullable();
            $table->string('mobile_recepteur')->nullable();
            $table->char('code_dev_partenaire_pay')->nullable();
            $table->double('montant_dev_partenaire_pay')->default(0);
            $table->string('code_province_envoi')->nullable();
            $table->string('id_code_trans')->nullable();
            $table->string('code_agence_correspondant')->nullable();
            $table->string('correspondant')->nullable();
            $table->boolean('douteuse')->default(0);
            $table->char('on_hold_raison')->nullable();
            $table->string('numero_carte_benef')->nullable();
            $table->string('message')->nullable();
            $table->string('reintegree_par')->nullable();
            $table->dateTime('reintegree_le')->nullable()->default('0000-00-00 00:00:00');
            $table->string('code_master_envoi')->index()->nullable();
            $table->string('code_master_payement')->index()->nullable();
            $table->string('on_hold')->nullable();
            $table->string('ip_validateur')->nullable();
            $table->char('symbole_devise_compense')->nullable();
            $table->string('partenaire_ref_sending')->nullable()->index();
            $table->string('code_operateur_envoi_ui')->nullable();
            $table->string('code_operateur_payement_ui')->nullable();
            $table->boolean('etat_compliance')->nullable()->default(0);
            $table->boolean('maintenir_compliance')->nullable()->default(0);
            $table->double('part_emission_global')->nullable()->default(0);
            $table->double('part_payement_global')->nullable()->default(0);
            $table->double('part_etat_payement')->nullable()->default(0);
            $table->double('part_reseau_payement')->nullable()->default(0);
            $table->double('part_emission_global_de')->nullable()->default(0);
            $table->double('part_payement_global_de')->nullable()->default(0);
            $table->double('part_etat_payement_de')->nullable()->default(0);
            $table->double('part_reseau_payement_de')->nullable()->default(0);
            $table->double('part_emission_global_dc')->nullable()->default(0);
            $table->double('part_payement_global_dc')->nullable()->default(0);
            $table->double('part_etat_payement_dc')->nullable()->default(0);
            $table->double('part_reseau_payement_dc')->nullable()->default(0);
            $table->double('part_emission_global_dp')->nullable()->default(0);
            $table->double('part_payement_global_dp')->nullable()->default(0);
            $table->double('part_etat_payement_dp')->nullable()->default(0);
            $table->double('part_reseau_payement_dp')->nullable()->default(0);
            $table->double('part_emission_global_us')->nullable()->default(0);
            $table->double('part_payement_global_us')->nullable()->default(0);
            $table->double('part_etat_payement_us')->nullable()->default(0);
            $table->double('part_reseau_payement_us')->nullable()->default(0);
            $table->double('part_emission_global_eur')->nullable()->default(0);
            $table->double('part_payement_global_eur')->nullable()->default(0);
            $table->double('part_etat_payement_eur')->nullable()->default(0);
            $table->double('part_reseau_payement_eur')->nullable()->default(0);
            $table->double('part_banque_partenaire_de')->nullable()->default(0);
            $table->double('part_banque_partenaire_dp')->nullable()->default(0);
            $table->double('part_banque_partenaire_us')->nullable()->default(0);
            $table->double('part_banque_partenaire_eur')->nullable()->default(0);
            $table->double('part_banque_partenaire_dc')->nullable()->default(0);
            $table->double('part_banque_partenaire')->nullable()->default(0);
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
        Schema::dropIfExists('transaction_annulees');
    }
};
