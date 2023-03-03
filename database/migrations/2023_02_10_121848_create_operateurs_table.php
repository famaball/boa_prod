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
        Schema::create('operateurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_operateur');
            // $table->string('code_operateur')->primary();
            $table->string('profil')->unique();
            $table->string('mot_de_passe')->default('sdfjk554dfhjhjzaazeahkazUIOZ88777EAZUIAA4');
            $table->string('nom');
            $table->string('prenom');
            $table->smallInteger('ntc')->default(0);
            $table->dateTime('date_maj_pwd')->default('0000-00-00 00:00:00');
            $table->boolean('verouiller')->default(0);
            $table->smallInteger('groupe')->default(0);
            $table->string('agence');
            $table->double('max_montant')->default(1000000);
            $table->string('ancien')->nullable();
            $table->boolean('compliance')->nullable()->default(0);
            $table->boolean('maj_agence')->default(0);
            $table->smallInteger('activer')->nullable()->default(1);
            $table->dateTime('date_derniere_acces')->nullable()->default('0000-00-00 00:00:00');
            $table->string('pin_emission')->nullable()->default('sdfUIOZ88777EAZUIAA4');
            $table->string('email')->nullable();
            $table->tinyInteger('valider_change')->nullable()->default(-1);
            $table->boolean('is_lite_adm')->nullable()->default(0);
            $table->string('code_ctrl_ag')->nullable();
            $table->boolean('can_valid')->nullable()->default(-1);
            $table->boolean('est_master_user')->nullable()->default(0);
            $table->string('imei')->nullable();
            $table->boolean('agent_mobile')->nullable()->default(0);
            $table->string('telephone_agent_mobile')->nullable();
            $table->boolean('auto_compense')->nullable()->default(0);
            $table->string('session_id')->nullable();
            $table->string('code_guichet_op')->nullable();
            $table->boolean('acc_list_op')->nullable()->default(0);
            $table->boolean('email_actif')->nullable()->default(0);
            $table->boolean('check_machine_attente')->nullable()->default(0);
            $table->char('staff_profile')->nullable()->default('xxx');
            $table->timestamp('date_create_op')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->boolean('check_op_multi_login')->nullable()->default(0);
            $table->string('compte_agence')->nullable();
            $table->boolean('is_otp_activated')->nullable()->default(0);
            $table->string('last_otp')->nullable();
            $table->datetime('last_otp_gen_date')->nullable();
            $table->datetime('last_otp_used_date')->nullable();
            $table->boolean('last_otp_valid')->nullable()->default(0);
            $table->string('otp_telephone')->nullable();
            $table->boolean('send_pwd_sms')->nullable()->default(0);
            $table->boolean('valider_modif_op')->nullable()->default(0);
            $table->boolean('repliquer')->nullable()->default(0);
            $table->smallInteger('ntc_2')->nullable()->default(0);
            $table->string('code_operateur_ui')->unique();
            $table->boolean('is_business_send')->nullable()->default(0);
            $table->boolean('is_business_pay')->nullable()->default(0);
            $table->boolean('is_no_bussiness_send')->nullable()->default(1);
            $table->boolean('is_no_bussiness_pay')->nullable()->default(1);
            $table->boolean('activate_2_fa')->nullable()->default(0);
            $table->boolean('by_api2_fa')->nullable()->default(0);
            $table->string('phone_number_2_fa')->nullable()->default(0);
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
        Schema::dropIfExists('operateurs');
    }
};
