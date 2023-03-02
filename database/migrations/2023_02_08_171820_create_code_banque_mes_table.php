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
        Schema::create('code_banque_mes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_banque')->nullable();
            $table->string('numero_compte_me')->nullable();
            $table->string('designation')->nullable();
            $table->string('abreviation')->nullable();
            $table->char('pays')->nullable()->default('0SN');
            $table->boolean('type')->nullable()->default(0);
            $table->string('adresse')->nullable();
            $table->string('ville')->nullable();
            $table->string('telephone')->nullable();
            $table->string('format_ref_1_debit')->nullable();
            $table->string('nom_donneur_ordre_ref_1_debit')->nullable();
            $table->string('format_ref_2_debit')->nullable();
            $table->string('nom_donneur_ordre_ref_2_debit')->nullable();
            $table->string('format_ref_3_debit')->nullable();
            $table->string('nom_donneur_ordre_ref_3_debit')->nullable();
            $table->string('signataire_1')->nullable();
            $table->string('signataire_2')->nullable();
            $table->string('destinataire_2')->nullable();
            $table->string('titre')->nullable();
            $table->string('destinataire_1')->nullable();
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
        Schema::dropIfExists('code_banque_mes');
    }
};
