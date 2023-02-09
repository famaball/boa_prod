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
        Schema::create('log_transaction_agent_mobiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_transaction', 20)->unique();
            $table->double('montant')->default(0);
            $table->double('taxe')->default(0);
            $table->double('frais')->default(0);
            $table->double('frais_tel_ou_liv')->default(0);
            $table->datetime('date_depot')->index()->default('0000-00-00 00:00:00');
            $table->datetime('date_payement')->default('0000-00-00 00:00:00');
            $table->smallInteger('delai')->default(0);
            $table->string('client_a_identifier', 4);
            $table->char('type_piece', 2);
            $table->string('numero_piece', 20);
            $table->string('question_secrete', 150);
            $table->string('reponse_secrete', 150);
            $table->string('id_emetteur', 10)->nullable()->default(0);
            $table->string('id_recepteur', 10)->nullable()->default(0);
            $table->string('code_operateur_depot', 20)->index();
            $table->string('code_operateur_payement', 20)->nullable()->index();
            $table->boolean('retour')->default(0);
            $table->boolean('type_transaction')->nullable()->default(1);
            $table->char('pays_destination', 3);
            $table->string('code_agence_retrait', 14);
            $table->boolean('faxer')->default(0);
            $table->boolean('contrainte')->default(0);
            $table->boolean('a_valider')->default(0);
            $table->double('montant_payement')->default(0);
            $table->double('emission_devise')->default(0);
            $table->double('payement_devise')->default(0);
            $table->double('taxe_devise')->default(0);
            $table->boolean('rejet')->default(0);
            $table->smallInteger('repliquer')->default(0);
            $table->string('autre_numero_transaction', 20);
            $table->double('taux_change')->nullable()->default(0);
            $table->smallInteger('transmis_au_partenaire')->nullable()->default(0);
            $table->smallInteger('demande_debit_credit')->default(0);
            $table->smallInteger('confirmer_debit_credit')->default(0);
            $table->double('commission_devise_payement')->nullable();
            $table->integer('deja_pris')->default(0);
            $table->double('tob')->default(0);
            $table->double('taux_du_jour')->default(0);
            $table->string('zone_envoi', 2)->index();
            $table->string('zone_payement', 2)->index();
            $table->string('pays_envoi', 3)->index();
            $table->string('structure_envoi', 10)->index();
            $table->string('structure_payement', 10)->index();
            $table->string('agence_envoi', 14)->index();
            $table->string('agence_payement', 14)->index();
            $table->string('pays_payement', 3)->index();
            $table->double('cours_vente_off_dc')->default(0)->nullable();
            $table->double('cours_achat_off_dc')->default(0)->nullable();
            $table->integer('devise_emission')->nullable();
            $table->integer('devise_payement')->nullable();
            $table->tinyInteger('do_traiter')->default(0)->nullable();
            $table->smallInteger('compliance')->default(0)->nullable();
            $table->double('part_emission')->default(0)->nullable();
            $table->double('part_etat')->default(0)->nullable();
            $table->boolean('commission_traite')->default(0)->nullable();
            $table->string('observations', 50)->nullable();
            $table->string('ville_payement', 50)->nullable();
            $table->string('etat_payement', 50)->nullable();
            $table->double('commission_partenaire')->default(0)->nullable();
            $table->string('autre_numero_partenaire', 25)->nullable();
            $table->tinyInteger('en_attente')->default(0)->nullable();
            $table->string('code_partenaire', 10)->nullable();
            $table->string('code_reponse_pay', 7)->default('0000')->nullable();
            $table->string('code_reponse_conf', 7)->default('0000')->nullable();
            $table->string('code_agence_correspondant', 20)->nullable();
            $table->double('part_etat_de')->default(0);
            $table->double('part_etat_dp')->default(0);
            $table->double('part_emission_de')->default(0);
            $table->double('part_emission_dp')->default(0);
            $table->double('part_payement_de')->default(0);
            $table->double('part_payement_dp')->default(0);
            $table->double('part_reseau_de')->default(0);
            $table->double('part_reseau_dp')->default(0);
            $table->smallInteger('douteuse')->default(0);
            $table->string('correspondant', 20)->nullable();
            $table->boolean('sms_envoye')->default(0);
            $table->string('raison', 4)->nullable();
            $table->string('message', 250)->nullable();
            $table->string('old_numero_transaction', 20)->nullable();
            $table->string('id_code_trans', 10)->nullable();
            $table->boolean('generer_siar', 10)->nullable()->default(0);
            $table->string('code_province_envoi', 6)->nullable();
            $table->string('numero_carte',25)->nullable();


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
        Schema::dropIfExists('log_transaction_agent_mobiles');
    }
};
