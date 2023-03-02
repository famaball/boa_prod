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
        Schema::create('ws_confirm_en_attentes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_transaction')->unique();
            $table->string('code_agent_demandeur');
            $table->string('pays_destination')->nullable();
            $table->string('telephone_recepteur');
            $table->string('adresse_recepteur');
            $table->string('type_piece');
            $table->string('numero_piece');
            $table->date('date_emission_piece')->nullable();
            $table->date('date_expiration_piece')->nullable();
            $table->string('lieu_emission')->nullable();
            $table->dateTime('date_payement');
            $table->string('code_reponse_pay')->nullable()->default('0000');
            $table->string('code_reponse_conf')->nullable()->default('0000');
            $table->string('code_partenaire');
            $table->dateTime('date_confirmation');
            $table->timestamp('date_tracking')->useCurrent();
            $table->string('code_operateur_payement')->nullable();
            $table->string('reference_me_paiement')->index();
            $table->string('ref_bancaire_payement')->index();
            $table->string('ref_operation')->nullable();
            $table->string('nationalite')->nullable();
            $table->date('date_naissance')->nullable();
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
        Schema::dropIfExists('ws_confirm_en_attentes');
    }
};
