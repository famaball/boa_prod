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
        Schema::create('journal_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('structure')->index();
            $table->string('agence')->index();
            $table->string('operateur')->index();
            $table->double('montant_cfa')->default(0);
            $table->double('montant_devise')->default(0);
            $table->double('commission_cfa')->default(0);
            $table->double('commission_devise')->default(0);
            $table->smallInteger('nature_operation')->default(0)->index();
            $table->string('libelle');
            $table->string('sens')->index();
            $table->string('reference')->index();
            $table->string('observation');
            $table->timestamp('date_operation')->useCurrent();
            $table->double('commission_partenaire_devise')->nullable()->default(0);
            $table->double('commission_partenaire')->nullable()->default(0);
            $table->double('commission_etat_devise')->nullable()->default(0);
            $table->double('commission_etat')->nullable()->default(0);
            $table->double('taxe_devise')->nullable()->default(0);
            $table->double('situation_structure')->nullable()->default(0);
            $table->double('situation_agence')->nullable()->default(0);
            $table->integer('devise_operation')->nullable();
            $table->integer('devise_compense')->default(2)->nullable();
            $table->double('situation_structure_dev')->nullable();
            $table->double('com_structure')->nullable();
            $table->double('commission_agence')->nullable();
            $table->double('commission_agence_dev')->nullable()->default(0);
            $table->string('ref_report_nouveau')->nullable();
            $table->double('com_structure_dev')->nullable()->default(0);
            $table->boolean('flag_report')->nullable()->default(0);
            $table->boolean('has_sub_agent')->nullable();
            $table->double('autre_taxes_cfa')->nullable()->default(0);
            $table->double('autre_taxes_dev')->nullable();
            $table->boolean('fc')->nullable()->default(0)->index();
            $table->boolean('fv')->nullable()->default(0);
            $table->double('situation_solde_paie_global')->nullable()->default(0);
            $table->double('situation_solde_paie_interne')->nullable()->default(0);
            $table->double('situation_solde_paie_externe')->nullable()->default(0);
            $table->boolean('suivi_solde_paie')->nullable()->default(0);
            $table->string('reference2')->nullable()->index();
            $table->string('ref_trans')->nullable();
            $table->string('agence_operateur')->nullable();
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
        Schema::dropIfExists('journal_transactions');
    }
};
