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
        Schema::create('compense_agences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_agence')->nullable();
            $table->dateTime('date_effet')->nullable();
            $table->double('montant')->nullable();
            $table->smallInteger('plafond_activer')->nullable();
            $table->dateTime('date_insertion')->nullable();
            $table->string('code_operateur')->nullable();
            $table->double('versement')->default(0);
            $table->double('plafond_maximum')->nullable()->default(0);
            $table->smallInteger('bloquer_emission')->nullable();
            $table->double('situation_ag')->nullable()->default(0);
            $table->tinyInteger('auto_trans_ag')->nullable()->default(0);
            $table->boolean('is_valided')->nullable()->default(0);
            $table->string('motif')->nullable();
            $table->string('code_validateur')->nullable();
            $table->dateTime('date_validated')->nullable();
            $table->string('ref_num_recu')->nullable();
            $table->string('motif_rejet')->nullable();
            $table->string('code_agence_specifique')->nullable();
            $table->smallInteger('type_versement')->nullable()->default(0);
            $table->string('code_province')->nullable();
            $table->string('code_commune')->nullable();
            $table->double('part_com_agence')->nullable()->default(0);
            $table->double('cumul_agence')->nullable()->default(0);



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
        Schema::dropIfExists('compense_agences');
    }
};
