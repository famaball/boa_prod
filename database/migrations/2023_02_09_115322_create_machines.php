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
        Schema::create('machines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_serie');
            // $table->string('numero_serie')->primary();
            $table->integer('id_partenaire')->nullable();
            $table->integer('nombre_acces')->nullable()->default(0);
            $table->datetime('date_demande_inscription')->nullable();
            $table->datetime('date_validation_inscription')->nullable();
            $table->datetime('derniere_date_acces')->nullable();
            $table->integer('nta')->nullable();
            $table->integer('autorise')->nullable();
            $table->string('code_operateur_inscription')->nullable();
            $table->string('code_operateur_confirmation')->nullable();
            $table->string('code_agence')->nullable();
            $table->string('adresse_ip')->nullable();
            $table->string('structure')->nullable();
            $table->boolean('m_link')->nullable()->default(-1);
            $table->boolean('est_active')->nullable()->default(1);
            $table->boolean('bck_list')->default(0)->nullable();
            $table->string('ip_adr_validation')->nullable();
            $table->string('numero_serie_validation')->nullable();
            $table->string('n_sess_validation')->nullable();
            $table->string('pin_validation')->nullable();
            $table->datetime('date_mail_demande_valide')->nullable();
            $table->string('objet_mail_demande_valide')->nullable();
            $table->string('mail_expediteur_demande_valide')->nullable();
            $table->string('country_from')->nullable();
            $table->string('user_region')->nullable();
            $table->string('user_city')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('aera_code')->nullable();
            $table->string('ref_machine')->nullable()->index();
            $table->string('motif_refus_machine')->nullable();
            $table->string('identity_machine')->nullable()->index();
            $table->string('adresse_mac_machine')->nullable();
            $table->string('bios_serial_number')->nullable();
            $table->string('hdd_serial_number_valid')->nullable();
            $table->string('m_ref_partenaire')->nullable()->index();
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
        Schema::dropIfExists('machines');
    }
};
