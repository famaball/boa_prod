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
        Schema::create('transactions', function (Blueprint $table) {
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
            $table->boolean('rejet')->default(0);
            $table->smallInteger('repliquer')->default(0);
            $table->string('autre_numero_transaction');
            $table->double('taux_change')->nullable()->default(0);
            $table->smallInteger('transmis_au_partenaire')->nullable()->default(0);
            $table->smallInteger('demande_debit_credit')->default(0);
            $table->smallInteger('confirmer_debit_credit')->default(0);
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
            $table->double('cours_vente_off_dc')->nullable()->default(0);
            $table->double('cours_achat_off_dc')->nullable()->default(0);
            $table->integer('devise_emission')->nullable()->index();
            $table->integer('devise_payement')->nullable();
            $table->tinyInteger('do_traiter')->nullable()->default(0);
            $table->smallInteger('compliance')->nullable()->default(0);
            $table->double('part_emission')->nullable()->default(0);
            $table->double('part_etat')->nullable()->default(0);
            $table->boolean('commission_traite')->nullable()->default(0);
            $table->string('observations')->nullable();
            $table->string('ville_payement')->nullable();
            $table->string('etat_payement')->nullable();
            $table->double('commission_partenaire')->nullable()->default(0);
            $table->string('autre_numero_partenaire')->nullable();
            $table->tinyInteger('en_attente')->nullable()->default(0);
            $table->double('part_payement')->default(0);
            $table->double('part_reseau')->default(0);
            $table->string('ref_trans')->nullable();
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
        Schema::dropIfExists('transactions');
    }
};
