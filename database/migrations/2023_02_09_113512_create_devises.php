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
        Schema::create('devises', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre',20);
            $table->double('valeur_jour',20)->default(0);
            $table->string('symbole',5);
            $table->double('valeur_achat',20)->default(0);
            $table->double('valeur_vente',20)->default(0);
            $table->char('is_code_devise3',3)->nullable();
            $table->string('code_devise_delta',3)->nullable();
            $table->boolean('nb_arrondi',20)->default(0)->nullable();



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
        Schema::dropIfExists('devises');
    }
};
