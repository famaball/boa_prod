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
        Schema::create('demande_modif_clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_client', 10)->index();
            $table->string('nom', 200)->nullable();
            $table->string('prenom', 200)->nullable();
            $table->string('adresse', 250)->nullable();
            $table->string('telephone', 20)->nullable();
            $table->string('pays', 20)->nullable();
            $table->string('code_demandeur', 20);
            $table->datetime('date_demande')->default('0000-00-00 00:00:00');
            $table->string('code_autorisateur', 20)->nullable();
            $table->string('observations', 100)->nullable();
            $table->string('numero_transaction', 20)->nullable();
            $table->boolean('est_traitee')->default(0);
            $table->string('ancien_numero_compte', 30)->nullable();
            $table->string('new_numero_compte', 30)->nullable();
            $table->string('struct_demandeur', 10)->nullable();
            $table->string('type_operation', 1)->nullable();
            $table->datetime('date_autorisation')->nullable();
            $table->char('type_transaction', 1)->nullable();
            $table->string('ref_req', 30)->nullable();
            $table->string('le_motif', 100)->nullable();
            $table->string('new_nom', 200)->nullable();
            $table->string('new_prenom', 200)->nullable();
            $table->integer('audit_log')->default(0)->nullable();
            $table->string('ip_demandeur', 30)->nullable();
            $table->string('ip_validateur', 30)->nullable();
            $table->string('new_tel', 20)->nullable();
            $table->string('new_adresse', 150)->nullable();
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
        Schema::dropIfExists('demande_modif_clients');
    }
};
