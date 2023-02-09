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
        Schema::create('client_dcs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_client',20);
            $table->string('numero_identification',20);
            $table->string('nom',200);
            $table->string('prenom',200);
            $table->string('telephone',20);
            $table->string('fax',20);
            $table->string('adresse',250);
            $table->string('code_postal',50);
            $table->string('ville',50);
            $table->string('pays',4);
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
        Schema::dropIfExists('client_dcs');
    }
};
