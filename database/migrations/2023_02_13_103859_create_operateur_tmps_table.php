<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('operateur_tmps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_operateur')->index();
            $table->string('profil');
            $table->string('mot_de_passe')->default('sdfjk554dfhjhjzaazeahkazUIOZ88777EAZUIAA4');
            $table->string('nom');
            $table->string('prenom');
            $table->smallInteger('ntc')->default(0);
            $table->dateTime('date_maj_pwd')->default('0000-00-00 00:00:00');
            $table->boolean('verouiller')->default(0);
            $table->smallInteger('groupe')->default(0);
            $table->string('agence');
            $table->double('max_montant')->default(0)->nullable();
            $table->string('ancien')->default(0);
            $table->string('pin_emission')->nullable()->default('sdfUIOZ88777EAZUIAA4');
            $table->boolean('compliance')->nullable()->default(0);
            $table->datetime('date_derniere_access')->nullable()->default('0000-00-00 00:00:00');
            $table->smallInteger('activer')->nullable()->default(1);
            $table->string('old_pin')->nullable();
            $table->string('repliquer')->nullable()->default(0);
            $table->string('newpin')->nullable();
            $table->smallInteger('maj_compense')->nullable()->default(0);
            $table->smallInteger('change_pin')->nullable()->default(-1);
            $table->boolean('agent_mobile')->nullable()->default(0);
            $table->string('telephone_agent_mobile')->nullable();
            $table->string('imei')->nullable();
            $table->boolean('can_valid')->nullable()->default(-1);
            $table->string('id_transfert')->nullable();
            $table->boolean('auto_compense')->nullable()->default(0);
            $table->tinyInteger('valider_change')->nullable()->default(0);
            $table->string('type_plafond_env')->nullable()->default(0000);
            $table->double('plafond_e_jour')->nullable()->default(0);
            $table->double('plafond_e_semaine')->nullable()->default(0);
            $table->double('plafond_e_mois')->nullable()->default(0);
            $table->double('plafond_e_an')->nullable()->default(0);
            $table->string('code_guichet_op')->nullable();
            $table->boolean('est_master_user')->nullable()->default(0);
            $table->boolean('acc_list_op')->nullable()->default(0);
            $table->boolean('email_actif')->nullable()->default(0);
            $table->string('email')->nullable();
            $table->boolean('check_machine_attente')->nullable()->default(0);
            $table->char('staff_profile')->nullable()->default('xxx');
            $table->timestamp('date_create_op')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->boolean('check_op_multi_login')->nullable()->default(0);
            $table->boolean('etat_agence_master')->nullable()->default(0);
            $table->boolean('traite')->default(0);
            $table->boolean('valider_modif_op')->nullable()->default(0);
            $table->string('otp_telephone')->nullable();
            $table->string('tracking_update')->nullable();
            $table->boolean('send_pwd_sms')->nullable()->default(0)->index();
            $table->string('motif_rejet')->nullable();
            $table->string('operateur_valid')->nullable();
            $table->dateTime('date_valid')->nullable()->default('0000-00-00 00:00:00');
            $table->boolean('type_maj')->nullable()->default(-1);
            $table->string('operateur_modif')->nullable();
            $table->dateTime('date_modif')->nullable()->default('0000-00-00 00:00:00');
            $table->boolean('is_otp_activated')->nullable()->default(0);
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
        Schema::dropIfExists('operateur_tmps');
    }
};
