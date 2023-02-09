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
        Schema::create('compte_filiales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('structure', 20)->nullable();
            $table->string('codification_compte', 20)->nullable()->index();
            $table->string('chapitre', 10)->nullable();
            $table->string('compte', 11)->nullable();
            $table->string('cle', 2)->nullable();
            $table->string('libelle_compte', 30)->nullable();
            $table->string('nature_compte', 5);
            $table->char('code_pays', 3)->nullable()->index();
            $table->string('structure_cible', 10)->nullable();
            $table->char('devise_compte', 3)->nullable();
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
        Schema::dropIfExists('compte_filiales');
    }
};
