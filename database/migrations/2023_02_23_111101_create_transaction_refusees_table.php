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
        Schema::create('transaction_refusees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_transaction')->unique();
            $table->double('montant')->default(0);
            $table->double('taxe')->default(0);
            $table->double('frais')->default(0);
            $table->dateTime('date_depot')->default('0000-00-00 00:00:00');
            $table->string('question_secrete');
            $table->string('reponse_secrete');
            $table->string('code_operateur_depot');
            $table->boolean('type_transaction')->default(0)->nullable();
            $table->char('pays_destination')->nullable();
            $table->char('type_piece_emetteur');
            $table->char('numero_piece_emetteur');
            $table->string('nom_emetteur');
            $table->string('prenom_emetteur');
            $table->string('nom_benef');
            $table->string('prenom_benef');
            $table->double('emission_devise')->default(0);
            $table->double('payement_devise')->default(0);
            $table->double('taxe_devise')->default(0);
            $table->string('zone_envoi');
            $table->string('pays_envoi');
            $table->string('structure_envoi');
            $table->string('agence_envoi');
            $table->integer('devise_emission')->nullable();
            $table->string('ref_bancaire_envoi')->nullable();
            $table->double('montant_ttf')->nullable()->default(0);
            $table->double('tob1')->nullable()->default(0);
            $table->double('tob2')->nullable()->default(0);
            $table->double('tob_xof')->nullable()->default(0);
            $table->double('taux_change_xof')->nullable()->default(0);
            $table->string('numero_carte_benef')->nullable();
            $table->string('ref_trans')->nullable();
            $table->string('code_type_piece_emetteur')->nullable();
            $table->string('id_piece_emetteur')->nullable();
            $table->string('adr_ip_envoi')->nullable();
            $table->string('numero_serie_envoi')->nullable();
            $table->string('id_session_envoi')->nullable();
            $table->double('montant_beacde')->nullable()->default(0);
            $table->string('zone_destination')->nullable();
            $table->string('code_master_envoi')->nullable();
            $table->string('code_operateur_envoi_ui')->nullable();
            $table->boolean('compliance')->nullable()->default(1);
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
        Schema::dropIfExists('transaction_refusees');
    }
};
