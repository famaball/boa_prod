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
        Schema::create('transaction_suspectes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_transaction')->unique();
            $table->double('montant')->default(0);
            $table->double('emission_devise')->default(0);
            $table->double('payement_devise')->default(0);
            $table->datetime('date_insert')->default('0000-00-00 00:00:00');
            $table->smallInteger('transmis_au_partenaire')->default(0)->nullable();
            $table->string('structure_envoi')->index();
            $table->string('pays_destination')->nullable();
            $table->char('devise_emission')->nullable();
            $table->char('devise_payement')->nullable();
            $table->tinyInteger('liberee')->nullable()->default(0);
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
        Schema::dropIfExists('transaction_suspectes');
    }
};
