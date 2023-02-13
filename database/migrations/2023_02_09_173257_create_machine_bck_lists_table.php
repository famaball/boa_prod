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
        Schema::create('machine_bck_lists', function (Blueprint $table) {
            $table->increments('id');
           // $table->string('numero_serie')->primary();
           $table->integer('id_partenaire')->nullable();
           $table->integer('nombre_acess')->nullable()->default(0);
           $table->datetime('date_demande_inscription')->nullable();
           $table->datetime('date_validation_inscription')->nullable();
           $table->datetime('derniere_date_access')->nullable();
           $table->integer('nta')->nullable();
           $table->integer('autorise')->nullable()->default(0);
           $table->string('code_operateur_inscription')->nullable();
           $table->string('code_operateur_confirmation')->nullable();
           $table->string('code_agence')->nullable();
           $table->string('adresse_ip')->nullable();
           $table->string('structure')->nullable();
           $table->boolean('m_link')->nullable()->default(-1);
           $table->boolean('est_active')->nullable()->default(0);
           $table->boolean('bck_list')->nullable()->default(0);
           $table->string('identity_machine')->nullable()->default(0)->index();
           $table->string('adress_mac_machine')->nullable();
           $table->string('bios_serial_number')->nullable();
           $table->string('hdd_serial_number')->nullable();

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
        Schema::dropIfExists('machine_bck_lists');
    }
};
