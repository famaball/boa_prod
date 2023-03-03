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
            $table->string('numero_client')->index();
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('adresse')->nullable();
            $table->string('telephone')->nullable();
            $table->string('pays')->nullable();
            $table->string('code_demandeur');
            $table->datetime('date_demande')->default('0000-00-00 00:00:00');
            $table->string('code_autorisateur')->nullable();
            $table->string('observations')->nullable();
            $table->string('numero_transaction')->nullable()->index();
            $table->boolean('est_traitee')->default(0);
            $table->string('ancien_numero_compte')->nullable();
            $table->string('new_numero_compte')->nullable();
            $table->string('struct_demandeur')->nullable();
            $table->string('type_operation')->nullable();
            $table->datetime('date_autorisation')->nullable();
            $table->char('type_transaction')->nullable();
            $table->string('ref_req')->nullable();
            $table->string('le_motif')->nullable();
            $table->string('new_nom')->nullable();
            $table->string('new_prenom')->nullable();
            $table->integer('audit_log')->default(0)->nullable();
            $table->string('ip_demandeur')->nullable();
            $table->string('ip_validateur')->nullable();
            $table->string('new_tel')->nullable();
            $table->string('new_adresse')->nullable();
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
