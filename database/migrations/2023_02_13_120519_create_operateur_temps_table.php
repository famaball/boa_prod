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
        Schema::create('operateur_temps', function (Blueprint $table) {
            $table->increments('code_operateur');
            $table->string('profil')->index();
            $table->string('mot_de_passe')->default('aaaaa');
            $table->string('nom');
            $table->string('prenom');
            $table->smallInteger('ntc')->default(0);
            $table->datetime('date_maj_pwd')->default('0000-00-00 00:00:00');
            $table->boolean('verrouiller')->default(0);
            $table->smallInteger('groupe')->default(0);
            $table->string('agence');
            $table->double('max_montant')->default(1000000);
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
        Schema::dropIfExists('operateur_temps');
    }
};
