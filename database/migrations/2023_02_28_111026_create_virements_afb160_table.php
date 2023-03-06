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
        Schema::create('virements_afb160', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_devise');
            $table->double('montant')->default(0);
            $table->string('pays_virement');
            $table->string('code_agence');
            $table->string('code_structure');
            $table->string('numero_transaction');
            $table->string('sens_op');
            $table->string('code_enreg');
            $table->string('code_operation');
            $table->string('zone_reservee_b2');
            $table->string('numero_emetteur');
            $table->string('code_ccd');
            $table->string('zone_reservee_bc12');
            $table->dateTime('date_virement')->nullable()->default('0000-00-00 00:00:00');
            $table->string('nom_donneur_ordre');
            $table->string('ref_remise');
            $table->string('zone_reservee_d12');
            $table->string('zone_reservee_d21');
            $table->string('code_monnaie');
            $table->string('zone_reservee_d23');
            $table->string('code_guichet');
            $table->string('numero_compte');
            $table->string('identifiant_donneur_ordre');
            $table->string('code_banque');
            $table->string('zone_reservee_g2');
            $table->string('nom_banque');
            $table->string('declaration_balance_paiement');
            $table->string('libelle_virement')->index();
            $table->string('zone_reservee_c1');
            $table->string('zone_reservee_c2');
            $table->string('zone_reservee_d1');
            $table->string('zone_reservee_d2');
            $table->string('zone_reservee_d3');
            $table->string('zone_reservee_d4');
            $table->string('zone_reservee_f');
            $table->string('zone_reservee_g1');
            $table->string('lu');
            $table->date('date_generation')->nullable();
            $table->integer('sequence')->nullable()->default(1);
            $table->date('date_sequence')->nullable();
            $table->timestamp('date_insertion')->useCurrent();
            $table->string('code_reponse_depot')->nullable()->index();
            $table->text('message_depot')->nullable();
            $table->string('code_reponse_banque')->nullable()->index();
            $table->text('message_reponse_banque')->nullable();
            $table->datetime('date_reponse_banque')->nullable();
            $table->string('code_operateur_depot')->nullable();
            $table->boolean('printed')->nullable()->default(0);
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
        Schema::dropIfExists('virements_afb160');
    }
};
