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
        Schema::create('compte_agence_delta', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 45)->nullable();
            $table->string('chapitre', 20)->nullable();
            $table->string('numero_compte', 20)->nullable();
            $table->string('cle', 10)->nullable();
            $table->string('nature_compte', 30)->nullable();
            $table->string('code_agence', 14)->nullable();
            $table->boolean('compte_par_defaut')->default(0);
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
        Schema::dropIfExists('compte_agence_delta');
    }
};
