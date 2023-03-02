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
        Schema::create('transfert_annules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_transaction');
            $table->string('compte_a_crediter');
            $table->string('compte_a_debiter');
            $table->double('montant')->default(0);
            $table->double('taxe')->default(0);
            $table->dateTime('date')->default('0000-00-00 00:00:00');
            $table->tinyInteger('type_transfert')->default(0);
            $table->tinyInteger('etat')->default(0);
            $table->tinyInteger('delta')->default(0);
            $table->string('num_trans_debit');
            $table->string('num_trans_credit');
            $table->string('operateur_debit');
            $table->string('operateur_credit');
            $table->dateTime('date_operation_debit')->default('0000-00-00 00:00:00');
            $table->dateTime('date_operation_credit')->default('0000-00-00 00:00:00');
            $table->double('montant_payement')->default(0);
            $table->double('emission_devise')->default(0);
            $table->double('payement_devise')->default(0);
            $table->double('taxe_devise')->default(0);
            $table->string('code_acces');
            $table->tinyInteger('rejet')->default(0);
            $table->smallInteger('repliquer')->default(0);
            $table->string('autre_numero_transaction');
            $table->string('code_operateur_de_depot')->nullable();
            $table->string('ip_validateur')->nullable();
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
        Schema::dropIfExists('transfert_annules');
    }
};
