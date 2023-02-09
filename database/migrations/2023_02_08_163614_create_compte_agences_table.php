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
        Schema::create('compte_agences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('chapitre_compte', 10)->nullable();
            $table->string('compte_delta', 15)->nullable();
            $table->string('cle_compte', 3)->nullable();
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
        Schema::dropIfExists('compte_agences');
    }
};
