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
        Schema::create('transferts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_transaction')->unique();
            $table->string('compte_a_crediter')->index();
            $table->string('compte_a_debiter')->index();
            $table->double('montant')->default(0);
            $table->double('taxe')->default(0);
            $table->dateTime('date')->default('0000-00-00 00:00:00');
            $table->boolean('type_transfert')->default(0)->index();
            $table->boolean('etat')->default(0);
            $table->tinyInteger('delta')->default(0)->index();
            $table->string('num_trans_debit')->index();
            $table->string('num_trans_credit')->index();
            $table->string('operateur_debit')->index();
            $table->string('operateur_credit')->index();
            $table->dateTime('date_operation_debit')->default('0000-00-00 00:00:00');
            $table->dateTime('date_operation_credit')->default('0000-00-00 00:00:00');
            $table->double('montant_payement')->default(0);
            $table->double('emission_devise')->default(0);
            $table->double('payement_devise')->default(0);
            $table->double('taxe_devise')->default(0);
            $table->string('code_acces');
            $table->boolean('rejet')->default(0);
            $table->smallInteger('repliquer')->default(0);
            $table->string('autre_numero_transaction');
            $table->smallInteger('demande_debit_Credit')->default(0);
            $table->smallInteger('confirmer_debit_credit')->default(0);
            $table->string('compte_me')->nullable();
            $table->string('ville_banque')->nullable();
            $table->string('adr_banque')->nullable();
            $table->double('part_etat')->nullable()->default(0);
            $table->double('part_etat_de')->nullable()->default(0);
            $table->double('part_etat_dp')->nullable()->default(0);
            $table->string('code_operateur_de_depot')->nullable();
            $table->boolean('lu')->nullable()->default(0);
            $table->char('type_rejet')->nullable();
            $table->string('ref_trans')->nullable()->index();
            $table->string('code_agence_credit')->nullable();
            $table->string('code_structure_credit')->nullable();
            $table->string('code_agence_debit')->nullable();
            $table->string('code_structure_debit')->nullable();
            $table->string('partenaire_ref_sending')->nullable()->index();
            $table->string('code_banque_payement')->nullable();
            $table->string('code_banque_envoi')->nullable();
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
        Schema::dropIfExists('transferts');
    }
};
