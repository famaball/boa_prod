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
            // $table->string('numero_serie',50);
            $table->integer('id_partenaire')->nullable();
            $table->integer('nombre_acces')->nullable()->default(0);
            $table->datetime('date_demande_inscription')->nullable();
            $table->datetime('date_validation_inscription')->nullable();
            $table->datetime('derniere_date_acces')->nullable();
            $table->integer('nta')->nullable();
            $table->integer('autorise')->nullable();
            $table->string('code_operateur-inscription',20)->nullable();
            $table->string('code_operateur_confirmation',20)->nullable();
            $table->string('code_agence',20)->nullable();
            $table->string('adresse_ip',20)->nullable();
            $table->string('structure',20)->nullable();
            $table->boolean('m_link')->nullable()->default(-1);
            $table->boolean('est_active')->nullable()->default(1);
            $table->boolean('bck_list')->default(0);
            $table->string('ip_adr_validation',20)->nullable();
            $table->string('n_sess_validation',20)->nullable();
            $table->string('pin_validation',80)->nullable();
            $table->datetime('date_mail_demande_valide')->nullable();
            $table->string('objet_mail_demande_valide',100)->nullable();
            $table->string('mail_expediteur_demande_valide',100)->nullable();
            $table->string('country_from',3)->nullable();
            $table->string('user_region',20)->nullable();
            $table->string('user_city',20)->nullable();
            $table->string('postal_code',20)->nullable();
            $table->string('aera_code',20)->nullable();
            $table->string('ref_machine',30)->nullable()->index();
            $table->string('motif_refus_machine',250)->nullable();
            $table->string('identity_machine',50)->nullable()->index();
            $table->string('adresse_mac_machine',50)->nullable();
            $table->string('bios_serial_number',50)->nullable();
            $table->string('hdd_serial_number_valid',50)->nullable();
            $table->string('m_ref_partenaire',20)->nullable()->index();
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
