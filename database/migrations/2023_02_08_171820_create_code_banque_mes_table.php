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
            $table->string('code_banque', 20)->nullable();
            $table->string('numero_compte_me', 30)->nullable();
            $table->string('designation', 100)->nullable();
            $table->string('abreviation', 50)->nullable();
            $table->char('pays', 3)->nullable()->default('0SN');
            $table->boolean('type')->nullable()->default(0);
            $table->string('adresse', 100)->nullable();
            $table->string('ville', 50)->nullable();
            $table->string('telephone', 50)->nullable();
            $table->string('format_ref_1_debit', 20)->nullable();
            $table->string('nom_donneur_ordre_ref_1_debit', 30)->nullable();
            $table->string('format_ref_2_debit', 20)->nullable();
            $table->string('nom_donneur_ordre_ref_2_debit', 30)->nullable();
            $table->string('format_ref_3_debit', 20)->nullable();
            $table->string('nom_donneur_ordre_ref_3_debit', 30)->nullable();
            $table->string('signataire_1', 50)->nullable();
            $table->string('signataire_2', 50)->nullable();
            $table->string('destinataire_2', 50)->nullable();
            $table->string('titre', 50)->nullable();
            $table->string('destinataire_1', 50)->nullable();
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
