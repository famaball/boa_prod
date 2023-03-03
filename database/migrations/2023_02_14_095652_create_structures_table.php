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
        Schema::create('structures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_structure')->unique();
            $table->string('designation');
            $table->string('abreviation');
            $table->char('pays');
            $table->double('taxe_limite')->default(0);
            $table->double('montant_limite')->default(0);
            $table->string('compte_transitoire');
            $table->string('code_banque');
            $table->integer('devise')->default(0);
            $table->double('valeur_achat');
            $table->double('valeur_vente')->default(0);
            $table->string('langue')->default('francais');
            $table->double('taxe_etat')->default(0);
            $table->double('part_emission')->default(0);
            $table->double('part_payement')->default(0);
            $table->double('part_reseau')->default(0);
            $table->tinyInteger('test')->default(1);
            $table->double('montant_limite_reg')->default(0);
            $table->double('taxe_limite_reg')->default(0);
            $table->double('montant_limite_int')->default(0);
            $table->double('taxe_limite_int')->default(0);
            $table->double('decote')->default(0);
            $table->string('sous_reseau');
            $table->string('symbole_monnaie')->default('CFA');
            $table->smallInteger('compte_active')->default(0);
            $table->smallInteger('bloquer_emission')->default(0);
            $table->double('plafond_emission')->default(5000000);
            $table->smallInteger('type_reseau')->default(0);
            $table->smallInteger('type_repartition')->default(0);
            $table->double('pourcentage_emission')->default(0);
            $table->double('pourcentage_payement')->default(0);
            $table->double('part_payement_reseau_partenaire')->default(0.5);
            $table->double('interne')->default(0);
            $table->double('tob')->default(0);
            $table->string('structure_cd')->nullable()->index();
            $table->smallInteger('ca_ca')->nullable()->default(1);
            $table->smallInteger('ca_co')->nullable()->default(1);
            $table->smallInteger('co_co')->nullable()->default(1);
            $table->smallInteger('co_ca')->nullable()->default(1);
            $table->smallInteger('appel_fonds')->nullable()->default(0);
            $table->double('part_e_process')->nullable()->default(0);
            $table->double('part_groupe')->nullable()->default(0);
            $table->double('part_marketing')->nullable()->default(0);
            $table->double('taxe_etat_ecobank')->default(0);
            $table->char('type_plafond_client')->default('000')->nullable();
            $table->double('plafond_emission_client_jour')->default(0)->nullable();
            $table->double('plafond_emission_client_mois')->default(0)->nullable();
            $table->double('plafond_emission_client_an')->default(0)->nullable();
            $table->boolean('emission_pin')->default(0)->nullable();
            $table->double('plafond_emission_client_semaine')->default(0)->nullable();
            $table->double('tob2')->default(0)->nullable();
            $table->double('taxe_cs')->default(0)->nullable();
            $table->double('tob3')->default(0)->nullable();
            $table->double('taxe_ttf')->default(0)->nullable();
            $table->double('taxe_etat_ecobank2')->default(0)->nullable();
            $table->boolean('has_sub_agent')->default(0)->nullable();
            $table->double('part_emission_mag')->default(0)->nullable();
            $table->double('part_payement_mag')->default(0)->nullable();
            $table->boolean('is_sub_agent')->default(0)->nullable();
            $table->boolean('check_machine')->default(0)->nullable();
            $table->double('part_payement_reseau_partenaire_mag')->default(0)->nullable();
            $table->boolean('gestion_mot_de_passe')->default(0)->nullable();
            $table->boolean('nbre_histo_mot_de_passe')->default(1)->nullable();
            $table->timestamp('date_creation_structure')->useCurrent();
            $table->boolean('mode_link_f')->default(0)->nullable();
            $table->string('structure_cd2')->nullable();
            $table->string('code_master_agent')->nullable();
            $table->boolean('auto_compense')->default(0)->nullable();
            $table->boolean('lnk_modif_agent')->default(0)->nullable();
            $table->double('part_promo_edom')->default(0)->nullable();
            $table->double('part_promo_pdom')->default(0)->nullable();
            $table->double('part_promo_pr_pdom')->default(0)->nullable();
            $table->double('part_promo_pr_pdom_sag')->default(0)->nullable();
            $table->double('part_promo_pdom_sag')->default(0)->nullable();
            $table->double('part_promo_edom_sag')->default(0)->nullable();
            $table->double('part_promo_eint')->default(0)->nullable();
            $table->double('part_promo_pint')->default(0)->nullable();
            $table->double('part_promo_pr_pint')->default(0)->nullable();
            $table->double('part_promo_pr_pint_sag')->default(0)->nullable();
            $table->double('part_promo_pint_sag')->default(0)->nullable();
            $table->double('part_promo_eint_sag')->default(0)->nullable();
            $table->boolean('is_in_promo_dom')->default(0)->nullable();
            $table->boolean('is_in_promo_int')->default(0)->nullable();
            $table->double('m_max_par_auto_compense')->default(0)->nullable();
            $table->double('m_max_auto_c_par_semaine')->default(0)->nullable();
            $table->boolean('mode_suivi_partner')->default(1)->nullable();
            $table->double('part_fixe_emission_struct')->default(0)->nullable();
            $table->double('part_fixe_payement_struct')->default(0)->nullable();
            $table->double('part_fixe_payement_rind_struct')->default(0)->nullable();
            $table->boolean('check_trans_horaire')->default(0)->nullable();
            $table->boolean('check_report_trans')->default(0)->nullable();
            $table->boolean('check_send_pay_trans')->default(0)->nullable();
            $table->boolean('check_auto_trans_ag')->default(0)->nullable();
            $table->double('montant_structure')->default(0)->nullable();
            $table->double('montant_devise')->default(0)->nullable();
            $table->double('commission_etat')->default(0)->nullable();
            $table->double('commission_partenaire')->default(0)->nullable();
            $table->double('commission_etat_devise')->default(0)->nullable();
            $table->double('commission_partenaire_devise')->default(0)->nullable();
            $table->double('commission_cfa')->default(0)->nullable();
            $table->double('commission_devise')->default(0)->nullable();
            $table->boolean('au_co')->default(0)->nullable();
            $table->boolean('ca_ka')->default(0)->nullable();
            $table->smallInteger('re_ca')->default(0)->nullable();
            $table->boolean('a_cred')->default(0)->nullable();
            $table->smallInteger('ca_va')->default(0)->nullable();
            $table->boolean('pay_bill')->default(0)->nullable();
            $table->boolean('to_mobile')->default(0)->nullable();
            $table->boolean('fp')->default(0)->nullable();
            $table->boolean('achat_bs')->default(0)->nullable();
            $table->double('part_payement_facture')->default(0)->nullable();
            $table->double('part_vente_credit')->default(0)->nullable();
            $table->double('part_deposit_nafa')->default(0)->nullable();
            $table->boolean('mode_white_label')->default(0)->nullable();
            $table->double('montant_max_par_compense')->default(0)->nullable();
            $table->double('montant_max_par_semaine')->default(0)->nullable();
            $table->double('cumul_compense_eff')->default(0)->nullable();
            $table->boolean('nbe_compense_semaine')->default(3)->nullable();
            $table->boolean('nbe_compense_eff')->default(0)->nullable();
            $table->boolean('activer')->default(0)->nullable();
            $table->string('ref_partenaire')->nullable();
            $table->string('pwd_b_partenaire')->nullable();
            $table->double('plafond_devise')->default(0)->nullable();
            $table->double('valeur_euro_en_cfa')->default(0)->nullable();
            $table->smallInteger('commission')->nullable();
            $table->double('versement')->default(0)->nullable();
            $table->string('reseau_wl')->nullable();
            $table->double('part_reseau_wl')->default(0)->nullable();
            $table->double('taux_money_express')->default(0)->nullable();
            $table->double('montant_structure_wl')->default(0)->nullable();
            $table->double('montant_devise_wl')->default(0)->nullable();
            $table->double('commission_etat_wl')->default(0)->nullable();
            $table->double('commission_partenaire_wl')->default(0)->nullable();
            $table->double('commission_etat_devise_wl')->default(0)->nullable();
            $table->double('commission_partenaire_devise_wl')->default(0)->nullable();
            $table->double('commission_wl_cfa')->default(0)->nullable();
            $table->double('commission_devise_wl')->default(0)->nullable();
            $table->boolean('activer_wl')->default(1)->nullable();
            $table->boolean('commission_wl')->default(1)->nullable();
            $table->boolean('bloquer_emission_wl')->default(1)->nullable();
            $table->double('versement_wl')->default(0)->nullable();
            $table->dateTime('date_compense_wl')->default('0000-00-00 00:00:00')->nullable();
            $table->string('operateur_wl')->nullable();
            $table->double('versement_devise_wl')->default(0)->nullable();
            $table->double('plafond_emission_cfa')->default(0)->nullable();
            $table->boolean('check_adr_mac_machine')->nullable()->default(0);
            $table->boolean('check_multi_login')->default(0)->nullable();
            $table->double('taxe_beac')->default(0)->nullable();
            $table->double('montant_maxhzcemac')->default(0)->nullable();
            $table->string('code_utilisateur_delta')->nullable();
            $table->string('code_devise_specifique')->nullable();
            $table->string('code_service_delta')->nullable();
            $table->char('exoneration_comm')->default('O')->nullable();
            $table->boolean('auto_delta')->default(0)->nullable();
            $table->boolean('nb_arrondi')->default(2)->nullable();
            $table->boolean('horaire')->default(0)->nullable();
            $table->string('contact')->nullable();
            $table->boolean('montant_zero_to_delta')->default(1)->nullable();
            $table->tinyInteger('nb_zero_suffixe')->default(0)->nullable();
            $table->double('plafond_emission_structure_jour')->default(0)->nullable();
            $table->double('plafond_emission_structure_semaine')->default(0)->nullable();
            $table->double('plafond_emission_structure_mois')->default(0)->nullable();
            $table->double('plafond_emission_structure_an')->default(0)->nullable();
            $table->char('type_plafond_est')->default('0000')->nullable();
            $table->double('plafond_emission_agen_jour')->default(0)->nullable();
            $table->double('plafond_emission_agen_semaine')->default(0)->nullable();
            $table->double('plafond_emission_agen_mois')->default(0)->nullable();
            $table->double('plafond_emission_agen_an')->default(0)->nullable();
            $table->char('type_plafond_e_agen')->default('0000')->nullable();
            $table->boolean('send_profile_delta')->default(0);
            $table->boolean('verif_unique_cert')->default(0)->nullable();
            $table->string('ref_partenaire_sag')->nullable();
            $table->boolean('compense_xaf')->default(0)->nullable();
            $table->boolean('actif_vers_me')->default(0)->nullable();
            $table->string('code_devise_compense_xaf')->nullable();
            $table->smallInteger('actif')->default(0)->nullable();
            $table->boolean('is_otp_activ_struc')->default(0)->nullable();
            $table->boolean('send_pin_sms')->default(0)->nullable();
            $table->boolean('send_pwd_sms')->default(0)->nullable();
            $table->boolean('activer_pin_envoi')->default(0)->nullable();
            $table->boolean('activer_pin_payement')->default(0)->nullable();
            $table->boolean('validation_operateur')->default(0)->nullable();
            $table->boolean('validation_agence')->default(0)->nullable();
            $table->boolean('activation_sous_agent')->default(0)->nullable();
            $table->boolean('activer_paye_compte')->default(0)->nullable();
            $table->boolean('horaire_dimanche')->default(0)->nullable();
            $table->boolean('ka_Ca')->default(0)->nullable();
            $table->double('montant_limite_non_client')->default(0)->nullable();
            $table->double('taxe_banque_partenaire')->default(0)->nullable();
            $table->boolean('activate_2_fa')->default(0)->nullable();
            $table->boolean('is_business')->default(0)->nullable();
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
        Schema::dropIfExists('structures');
    }
};
