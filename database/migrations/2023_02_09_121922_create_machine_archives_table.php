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
        Schema::create('machine_archives', function (Blueprint $table) {
            $table->increments('id');
            // $table->string('numero_serie')->primary();
            $table->string('numero_serie');
            $table->integer('id_partenaire')->nullable();
            $table->integer('nombre_acess')->nullable()->default(0);
            $table->datetime('date_demande_inscription')->nullable();
            $table->dateTime('date_validation_inscription')->nullable();
            $table->dateTime('derniere_date_access')->nullable();
            $table->integer('nta')->nullable();
            $table->integer('autorise')->nullable()->default(0);
            $table->string('code_operateur_inscription')->nullable()->index();
            $table->string('code_operateur_confirmation')->nullable();
            $table->string('code_agence')->nullable()->index();
            $table->string('structure')->nullable()->index();
            $table->string('adresse_ip')->nullable();
            $table->string('operateur_action')->nullable();
            $table->dateTime('date_insertion')->nullable();
            $table->boolean('est_active')->nullable()->default(0);
            $table->boolean('m_link')->nullable()->default(-1);
            $table->boolean('mode_arc')->nullable()->default(-1);





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
        Schema::dropIfExists('machine_archives');
    }
};
