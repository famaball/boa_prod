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
        Schema::create('compte_agence_bis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('agence_master')->nullable();
            $table->string('codification_compte')->nullable()->index();
            $table->string('chapitre')->nullable();
            $table->string('compte')->nullable();
            $table->string('cle')->nullable();
            $table->string('libelle_compte')->nullable();
            $table->string('nature_compte');
            $table->boolean('est_validee')->nullable()->default(0);
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
        Schema::dropIfExists('compte_agence_bis');
    }
};
