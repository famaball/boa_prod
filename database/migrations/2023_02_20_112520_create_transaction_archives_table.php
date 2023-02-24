<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('transaction_archives', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_transaction')->unique();
            $table->double('montant')->default(0);
            $table->double('taxe')->default(0);
            $table->double('frais')->default(0);
            $table->double('frais_tel_ou_liv')->default(0);
            $table->dateTime('date_depot')->default('0000-00-00 00:00:00')->index();
            $table->dateTime('date_payement')->default('0000-00-00 00:00:00')->index();
            $table->smallInteger('delai')->default(0);
            $table->integer('client_a_identifier')->default(0);
            $table->string('question_secrete');
            $table->string('reponse_secrete');
            $table->string('id_emetteur')->index();
            $table->string('id_recepteur')->index();
            $table->string('code_operateur_depot')->index();
            $table->string('code_operateur_payement')->nullable()->index()->default(0);
            $table->string('retour')->default('NON');
            $table->boolean('type_transaction')->nullable()->default(0);
            $table->boolean('etat_transaction')->nullable()->default(0);
            $table->char('pays_destination')->nullable();
            $table->string('code_agence_retrait');
            $table->string('type_piece')->nullable();
            $table->string('numero_piece');
            $table->boolean('faxer')->default(0);
            $table->boolean('contrainte')->default(0);
            $table->boolean('a_valider')->default(0);
            $table->double('montant_payement')->default(0);
            $table->double('emission_devise')->default(0);
            $table->double('payement_devise')->default(0);
            $table->double('taxe_devise')->default(0);
            $table->tinyInteger('rejet')->default(0);
            $table->string('autre_numero_transaction')->index();
            $table->char('partenaire')->nullable()->default(00);
            $table->double('taux_change')->nullable()->default(0.0000000);
            $table->smallInteger('demande_debit_credit')->default(0);
            $table->smallInteger('confirmer_debit_credit')->default(0);
            $table->smallInteger('repliquer')->default(0);
            $table->double('part_emission')->default(0);
            $table->double('part_payement')->default(0);
            $table->double('part_reseau')->default(0);
            $table->double('part_etat')->default(0);
            $table->smallInteger('commission_traite')->default(0);
            $table->double('commission_devise_payement')->nullable();
            $table->integer('deja_pris')->index()->default(0);
            $table->tinyInteger('sms_envoye')->nullable()->default(0);
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
            $table->double('cours_vente_off_dc')->nullable()->default(0);
            $table->double('cours_achat_off_dc')->nullable()->default(0);
            $table->integer('devise_emission')->nullable()->index();
            $table->integer('devise_payement')->nullable();
            $table->tinyInteger('do_traiter')->nullable()->default(0);
            $table->boolean('by_api')->nullable()->default(0);
            $table->string('observations')->nullable();
            $table->string('ville_payement')->nullable();
            $table->string('etat_payement')->nullable();
            $table->double('commission_partenaire')->nullable()->default(0);
            $table->string('autre_numero_partenaire')->nullable();
            $table->smallInteger('compliance')->default(0);
            $table->string('raison')->nullable();
            $table->string('code_agent_initiateur')->nullable();
            $table->char('symbole_devise_payement')->nullable();
            $table->char('symbole_devise_emission')->nullable();
            $table->double('part_etat_de')->default(0);
            $table->double('part_etat_dp')->default(0);
            $table->double('part_emission_de')->default(0);
            $table->double('part_emission_dp')->default(0);
            $table->double('part_payement_de')->default(0);
            $table->double('part_payement_dp')->default(0);
            $table->double('part_reseau_de')->default(0);
            $table->double('part_reseau_dp')->default(0);
            $table->double('part_groupe')->default(0);
            $table->double('part_groupe_de')->default(0);
            $table->double('part_groupe_dp')->default(0);
            $table->double('part_marketing')->default(0);
            $table->double('part_marketing_de')->default(0);
            $table->double('part_marketing_dp')->default(0);
            $table->double('part_e_process')->default(0);
            $table->double('part_e_process_de')->default(0);
            $table->double('part_e_process_dp')->default(0);
            $table->smallInteger('transmis_au_partenaire')->nullable()->default(0)->index();
            $table->string('ref_bancaire_envoi')->nullable()->index();
            $table->string('ref_bancaire_payement')->nullable()->index();
            $table->double('montant_us')->nullable()->default(0);
            $table->double('commission_us')->nullable()->default(0);
            $table->double('part_emission_us')->nullable()->default(0);
            $table->double('part_payement_us')->nullable()->default(0);
            $table->double('part_etat_us')->nullable()->default(0);
            $table->double('part_reseau_us')->nullable()->default(0);
            $table->double('part_e_process_us')->nullable()->default(0);
            $table->double('part_groupe_us')->nullable()->default(0);
            $table->double('part_marketing_us')->nullable()->default(0);
            $table->double('taux_change_us')->nullable()->default(0.0000000);
            $table->double('taux_change_eur')->nullable()->default(0.0000000);
            $table->dateTime('payee_le')->nullable()->default('0000-00-00 00:00:00');
            $table->string('payee_par')->nullable();
            $table->double('montant_ttf')->nullable()->default(0);
            $table->double('part_com_agence_emis')->nullable()->default(0);
            $table->double('part_com_agence_paie')->nullable()->default(0);
            $table->double('part_dev_partenaire_pay')->nullable()->default(0);
            $table->double('part_payement_s_ag')->nullable()->default(0);
            $table->double('part_payement_des_ag')->nullable()->default(0);
            $table->double('part_payement_dps_ag')->nullable()->default(0);
            $table->double('part_payement_m_ag')->nullable()->default(0);
            $table->double('part_payement_dem_ag')->nullable()->default(0);
            $table->double('part_payement_dpm_ag')->nullable()->default(0);
            $table->double('part_emission_s_ag')->nullable()->default(0);
            $table->double('part_emission_des_ag')->nullable()->default(0);
            $table->double('part_emission_dps_ag')->nullable()->default(0);
            $table->double('part_emission_m_ag')->nullable()->default(0);
            $table->double('part_emission_dem_ag')->nullable()->default(0);
            $table->double('part_emission_dpm_ag')->nullable()->default(0);
            $table->double('tob1')->nullable()->default(0);
            $table->double('tob2')->nullable()->default(0);
            $table->datetime('reintegree_le')->nullable()->default('0000-00-00 00:00:00');
            $table->string('reintegree_par')->nullable();
            $table->string('message')->nullable();
            $table->double('tob_xof')->nullable()->default(0);
            $table->double('taux_change_xof')->nullable()->default(0);
            $table->string('numero_carte_benef')->nullable();
            $table->double('taxe_devise_default')->nullable();
            $table->double('taxe_devise_payement_default')->nullable();
            $table->double('taxe_default')->nullable();
            $table->tinyInteger('est_negocier')->nullable()->default(0);
            $table->double('taxe_default_us')->nullable();
            $table->char('on_hold_raison')->nullable();
            $table->tinyInteger('is_validate')->nullable()->default(0);
            $table->date('date_validation')->nullable();
            $table->string('ref_trans')->nullable()->index();
            $table->string('code_operateur_validation')->nullable();
            $table->double('part_etat_de_default')->nullable();
            $table->double('part_etat_us_default')->nullable();
            $table->double('part_etat_default')->nullable();
            $table->smallInteger('douteuse')->nullable()->default(0);
            $table->string('correspondant')->nullable();
            $table->string('code_agence_correspondant')->nullable();
            $table->string('id_code_trans')->nullable();
            $table->string('code_province_envoi')->nullable();
            $table->double('montant_dev_partenaire_pay')->nullable();
            $table->char('code_dev_partenaire_pay')->nullable();
            $table->string('mobile_recepteur')->nullable();
            $table->string('code_operateur_tel_co')->nullable();
            $table->string('mobile_emetteur')->nullable();
            $table->string('code_type_piece_emetteur')->nullable();
            $table->string('id_piece_emetteur')->nullable();
            $table->string('adr_ip_envoi')->nullable();
            $table->string('numero_serie_envoi')->nullable();
            $table->string('id_session_envoi')->nullable();
            $table->string('id_benef_remb')->nullable();
            $table->string('code_operateur_remboursement')->nullable();
            $table->dateTime('date_remboursement')->nullable();
            $table->smallInteger('a_rembourser')->index()->default(0)->nullable();
            $table->string('motif')->nullable();
            $table->double('montant_beacde')->default(0)->nullable();
            $table->double('montant_beaceur')->default(0)->nullable();
            $table->double('montant_beacdp')->default(0)->nullable();
            $table->double('montant_beacus')->default(0)->nullable();
            $table->string('zone_destination')->nullable()->index();
            $table->boolean('genere_e')->default(0)->nullable();
            $table->boolean('genere_p')->default(0)->nullable();
            $table->boolean('genere_a')->default(0)->nullable();
            $table->boolean('genere_c')->default(0)->nullable();
            $table->boolean('genere_r')->default(0)->nullable();
            $table->string('code_master_envoi')->nullable()->index();
            $table->string('code_master_payement')->nullable()->index();
            $table->string('code_reponse_pay')->default('000')->nullable();
            $table->string('code_reponse_conf')->default('000')->nullable();
            $table->string('partenaire_ref_paying')->nullable()->index();
            $table->string('trans_to_mobile')->nullable();
            $table->string('code_partenaire')->nullable();
            $table->dateTime('date_confirm_pay')->default('0000-00-00 00:00:00')->nullable();
            $table->string('ref_operation')->nullable();
            $table->boolean('type_mapp')->default(0)->nullable();
            $table->boolean('cancellation')->default(0)->nullable()->index();
            $table->boolean('reintegration')->default(0)->nullable();
            $table->double('part_etat_eur')->default(0)->nullable();
            $table->double('part_emission_eur')->default(0)->nullable();
            $table->double('part_payement_eur')->default(0)->nullable();
            $table->double('part_groupe_eur')->default(0)->nullable();
            $table->double('part_marketing_eur')->default(0)->nullable();
            $table->double('montant_eur')->default(0)->nullable();
            $table->double('commission_eur')->default(0)->nullable();
            $table->double('montant_compense')->default(0)->nullable();
            $table->double('part_emission_dc')->default(0)->nullable();
            $table->double('part_payement_dc')->default(0)->nullable();
            $table->double('part_etat_dc')->default(0)->nullable();
            $table->double('part_reseau_dc')->default(0)->nullable();
            $table->double('part_groupe_dc')->default(0)->nullable();
            $table->double('part_marketing_dc')->default(0)->nullable();
            $table->double('taux_change_dc')->default(0)->nullable();
            $table->double('commission_dc')->default(0)->nullable();
            $table->double('tob_dc')->default(0)->nullable();
            $table->double('part_emission_us_s_ag')->default(0)->nullable();
            $table->double('part_emission_eur_s_ag')->default(0)->nullable();
            $table->double('part_emission_dc_s_ag')->default(0)->nullable();
            $table->double('part_payement_us_s_ag')->default(0)->nullable();
            $table->double('part_payement_eur_s_ag')->default(0)->nullable();
            $table->double('part_payement_dc_s_ag')->default(0)->nullable();
            $table->double('part_emission_us_m_ag')->default(0)->nullable();
            $table->double('part_emission_eur_m_ag')->default(0)->nullable();
            $table->double('part_emission_dc_m_ag')->default(0)->nullable();
            $table->datetime('date_conf_sms')->nullable()->default('0000-00-00 00:00:00')->nullable();
            $table->string('partenaire_ref_sending')->nullable()->index();
            $table->string('on_hold')->nullable();
            $table->double('devise_compense')->default(0)->nullable();
            $table->char('symbole_devise_compense')->nullable();
            $table->boolean('has_sub_agent')->default(0)->nullable();
            $table->string('channel')->nullable();
            $table->boolean('notification_sms')->default(0)->nullable();
            $table->string('reference_me_paiement')->index();
            $table->string('code_operateur_envoi_ui')->index()->nullable();
            $table->string('code_operateur_payement_ui')->index()->nullable();
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
            $table->string('ref_req')->nullable();
            $table->boolean('modification_benef')->nullable()->default(0);
            $table->double('part_payement_eur_m_ag')->nullable()->default(0);
            $table->double('part_payement_dc_m_ag')->nullable()->default(0);
            $table->double('part_payement_us_m_ag')->nullable()->default(0);
            $table->boolean('has_sub_agent_payement')->nullable()->default(0);
            $table->string('agence_master')->nullable();
            $table->boolean('reactiver')->nullable()->default(0)->index();
            $table->string('type_piece_recepteur')->nullable();
            $table->string('numero_piece_recepteur');
            $table->string('ref_tpe')->nullable();
            $table->double('part_banque_partenaire_de')->nullable()->default(0);
            $table->double('part_banque_partenaire_dp')->nullable()->default(0);
            $table->double('part_banque_partenaire_us')->nullable()->default(0);
            $table->double('part_banque_partenaire_eur')->nullable()->default(0);
            $table->double('part_banque_partenaire_dc')->nullable()->default(0);
            $table->double('part_banque_partenaire')->nullable()->default(0);
            $table->boolean('is_business')->nullable()->default(0);
            $table->string('sender_unique_id_number')->nullable();
            $table->string('receiver_unique_id_number')->nullable();
            $table->string('type_piece_r')->nullable();
            $table->string('numero_piece_r')->nullable();
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

        Schema::dropIfExists('transaction_archives');

    }

};
