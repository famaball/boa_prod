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
            $table->string('code')->nullable();
            $table->string('chapitre')->nullable();
            $table->string('numero_compte')->nullable();
            $table->string('cle')->nullable();
            $table->string('nature_compte')->nullable();
            $table->string('code_agence')->nullable();
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
