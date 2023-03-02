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
            $table->string('structure')->nullable();
            $table->string('codification_compte')->nullable()->index();
            $table->string('chapitre')->nullable();
            $table->string('compte')->nullable();
            $table->string('cle')->nullable();
            $table->string('libelle_compte')->nullable();
            $table->string('nature_compte');
            $table->char('code_pays')->nullable()->index();
            $table->string('structure_cible')->nullable();
            $table->char('devise_compte')->nullable();
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
