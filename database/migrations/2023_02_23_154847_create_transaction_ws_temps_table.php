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
        Schema::create('transaction_ws_temps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('partenaire')->nullable();
            $table->char('statut')->nullable();
            $table->string('numero_transaction')->nullable();
            $table->dateTime('date_depot')->default('0000-00-00 00:00:00');
            $table->dateTime('date_payement')->default('0000-00-00 00:00:00');
            $table->smallInteger('delai')->nullable();
            $table->string('client_a_identifier')->nullable();
            $table->char('type_piece')->nullable();
            $table->string('numero_piece')->nullable();
            $table->string('question_secrete')->nullable();
            $table->string('reponse_secrete')->nullable();
            $table->char('pays_destination')->nullable();
            $table->double('emission_devise')->nullable();
            $table->double('payement_devise')->nullable();
            $table->double('taxe_devise')->nullable();
            $table->double('taux_change')->nullable();
            $table->string('nom_emetteur')->nullable();
            $table->string('prenom_emetteur')->nullable();
            $table->string('telephone_emetteur')->nullable();
            $table->string('fax_emetteur')->nullable();
            $table->string('adresse_emetteur')->nullable();
            $table->string('code_zip_emetteur')->nullable();
            $table->string('etat_emetteur')->nullable();
            $table->string('pays_emetteur')->nullable();
            $table->string('email_emetteur')->nullable();
            $table->string('nom_recepteur')->nullable();
            $table->string('prenom_recepteur')->nullable();
            $table->string('telephone_recepteur')->nullable();
            $table->string('fax_recepteur')->nullable();
            $table->string('adresse_recepteur')->default('...');
            $table->string('ville_recepteur')->default('...');
            $table->string('code_zip_recepteur')->nullable();
            $table->string('etat_recepteur')->nullable();
            $table->string('pays_recepteur');
            $table->string('email_recepteur')->nullable();
            $table->smallInteger('genere')->nullable()->default('1');
            $table->smallInteger('traitement')->nullable();
            $table->string('message')->nullable();
            $table->string('autre_numero_transaction')->nullable();
            $table->char('devise_envoi')->nullable();
            $table->char('devise_payement')->nullable();
            $table->dateTime('date_insertion')->default('0000-00-00 00:00:00');
            $table->string('code_agence_de_partenaire')->nullable();
            $table->integer('transmis_au_partenaire')->default(0);
            $table->char('confirmation_tr');
            $table->string('code_operateur_payement')->nullable();
            $table->string('id_agent_payement')->nullable();
            $table->double('montant_en_euro')->nullable();
            $table->double('commission_en_euro')->nullable();
            $table->boolean('rappro_cfa')->nullable();
            $table->boolean('lu')->default(0);
            $table->string('id_emetteur')->nullable();
            $table->string('id_recepteur')->nullable();
            $table->char('pays_envoi')->nullable();
            $table->string('agence_envoi')->nullable();
            $table->string('ville_envoi')->nullable();
            $table->string('agence_payement')->nullable();
            $table->string('ville_payement')->nullable();
            $table->string('numero_compte')->nullable();
            $table->string('adresse_banque')->nullable();
            $table->string('ville_banque')->nullable();
            $table->string('banque')->nullable();
            $table->date('date_naissance_emetteur')->nullable();
            $table->char('type_piece_emetteur')->nullable();
            $table->string('numero_piece_emetteur')->nullable();
            $table->string('lieu_emission_emetteur')->nullable();
            $table->string('lieu_naissance_emetteur')->nullable();
            $table->date('date_expiration_piece_emetteur')->nullable();
            $table->date('date_emission_piece_emetteur')->nullable();
            $table->string('nationalite_emetteur')->nullable();
            $table->string('profession_emetteur')->nullable();
            $table->string('telephone_portable_emetteur')->nullable();
            $table->date('date_naissance_recepteur')->nullable();
            $table->char('type_piece_recepteur')->nullable();
            $table->string('numero_piece_recepteur')->nullable();
            $table->string('lieu_emission_recepteur')->nullable();
            $table->string('lieu_naissance_recepteur')->nullable();
            $table->date('date_expiration_piece_recepteur')->nullable();
            $table->date('date_emission_piece_recepteur')->nullable();
            $table->string('nationalite_recepteur')->nullable();
            $table->string('profession_recepteur')->nullable();
            $table->string('telephone_portable_recepteur')->nullable();
            $table->double('montant')->default(0)->nullable();
            $table->boolean('type_transaction')->default('1')->nullable();
            $table->tinyInteger('zone_envoi')->nullable();
            $table->tinyInteger('zone_payement')->nullable();
            $table->string('structure_envoi')->nullable();
            $table->string('structure_payement')->nullable();
            $table->string('pays_payement')->nullable();
            $table->boolean('by_api')->nullable()->default(0);
            $table->string('observations')->nullable();
            $table->double('commission_partenaire')->default(0)->nullable();
            $table->string('autre_numero_partenaire')->default(0)->nullable();
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
        Schema::dropIfExists('transaction_ws_temps');
    }
};
