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
        Schema::create('agences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_agence', 20)->unique()->notNull();
            $table->string('designation', 200)->notNull();
            $table->string('ville', 200);
            $table->boolean('differe')->default(0);
            $table->string('structure', 20);
            $table->string('region', 20);
            $table->boolean('equipe')->default(1);
            $table->string('agence_r', 20)->nullable();
            $table->string('code_agence_specifique', 20)->nullable();
            $table->string('adresse', 250)->nullable();
            $table->smallInteger('repliquer')->default(0)->nullable();
            $table->smallInteger('bloquer_emission')->default(0)->nullable();
            $table->smallInteger('bloquer_payement')->default(0)->nullable();

            $table->smallInteger('plafond_activer')->default(0)->nullable();
            $table->double('plafond')->default(2000)->nullable();
            $table->dateTime('date_effet')->nullable();
            $table->boolean('active')->default(1);
            $table->double('cumul')->default(0);
            $table->boolean('payement_distance')->nullable()->default(0);
            $table->string('code_adm_ctrl', 5)->nullable();
            $table->double('situation')->nullable()->default(0);

            $table->double('old_situation')->nullable()->default(0);
            $table->double('old_cumul')->nullable()->default(0);
            $table->string('virtual_account', 20)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('fax', 20)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('code_province', 10)->nullable();
            $table->string('code_commune', 10)->nullable();
            $table->boolean('auto_trans')->nullable()->default(0);
            $table->boolean('nbe_compense_semaine')->nullable()->default(3);
            $table->double('montant_max_par_compense')->nullable()->default(0);
            $table->double('montant_max_par_semaine')->nullable()->default(0);
            $table->boolean('active_vente_carte')->nullable()->default(0);
            $table->dateTime('date_compense')->nullable()->default('0000-00-00 00:00:00');
            $table->dateTime('date_maj_compense')->nullable()->default('0000-00-00 00:00:00');
            $table->boolean('nbe_compense_eff')->default(0)->nullable();
            $table->string('master_agence', 14)->nullable();
            $table->double('cumul_compense_eff')->default(0)->nullable();
            $table->boolean('is_m_distribeur')->default(0)->nullable();
            $table->boolean('is_master_agence')->default(0)->nullable();
            $table->boolean('check_ag_multi_login')->default(0)->nullable();
            $table->string('codification', 5)->nullable();
            $table->boolean('is_principale_agence')->default(0)->nullable();
            $table->boolean('is_solde_commun')->default(0);
            $table->boolean('own_compte_agence')->default(0)->nullable();
            $table->string('code_agence_liaison', 14)->nullable();
            $table->boolean('send_pin_sms')->default(0)->nullable();
            $table->boolean('send_pwd_sms')->default(0)->nullable();
            $table->boolean('activer_pin_envoi')->default(0)->nullable();
            $table->boolean('activer_pin_payement')->default(0)->nullable();
            $table->boolean('activer_is_business')->default(0)->nullable();
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
        Schema::dropIfExists('agences');
    }
};
