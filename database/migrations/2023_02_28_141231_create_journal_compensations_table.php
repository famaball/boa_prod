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
        Schema::create('journal_compensations', function (Blueprint $table) {
            $table->increments('id_jc');
            $table->string('code_structure')->nullable()->index();
            $table->string('code_agence')->nullable();
            $table->string('code_operateur')->nullable();
            $table->char('sens_operation')->nullable();
            $table->char('nature_operation')->nullable()->index();
            $table->date('date_de_valeur')->nullable()->index();
            $table->datetime('date_insert')->nullable();
            $table->string('ref_operation')->nullable();
            $table->string('reference_solde_c')->nullable()->index();
            $table->char('devise_compense')->nullable();
            $table->double('montant_dc', 20 , 7)->nullable();
            $table->double('part_payement_dc', 15 , 7)->nullable();
            $table->double('part_emission_dc', 15 , 7)->nullable();
            $table->double('part_etat_dc', 15 , 7)->nullable();
            $table->double('part_reseau_dc', 15 , 7)->nullable();
            $table->char('devise_partenaire')->nullable();
            $table->double('montant_dp', 20 , 7)->nullable();
            $table->double('part_emission_dp', 15 , 7)->nullable();
            $table->double('part_payement_dp', 15 , 7)->nullable();
            $table->double('part_etat_dp', 15 , 7)->nullable();
            $table->double('part_reseau_dp', 15 , 7)->nullable();
            $table->double('taux_change_dc_dp', 15 , 7)->nullable();
            $table->double('commission_dc', 20 , 7)->nullable();
            $table->double('commission_dp', 15 , 7)->nullable();
            $table->double('autre_taxes_dc', 15 , 7)->nullable();
            $table->double('autre_taxes_dp', 15 , 7)->nullable();
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
        Schema::dropIfExists('journal_compensations');
    }
};
