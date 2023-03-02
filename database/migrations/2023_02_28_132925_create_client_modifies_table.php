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
        Schema::create('client_modifies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_client')->index();
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('adresse')->nullable();
            $table->string('telephone')->nullable();
            $table->string('pays')->nullable();
            $table->string('code_operateur')->index();
            $table->dateTime('date_modif')->default('0000-00-00 00:00:00');
            $table->string('numero_client2')->nullable()->index();
            $table->string('numero_compte')->nullable()->index();
            $table->string('ville')->nullable();
            $table->string('numero_transaction')->nullable()->index();
            $table->string('genre')->nullable();
            $table->string('nom_new')->nullable();
            $table->string('prenom_new')->nullable();
            $table->string('type_client')->nullable()->index();
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
        Schema::dropIfExists('client_modifies');
    }
};
