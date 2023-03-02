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
            $table->string('titre');
            $table->double('valeur_jour')->default(0);
            $table->string('symbole');
            $table->double('valeur_achat')->default(0);
            $table->double('valeur_vente')->default(0);
            $table->char('is_code_devise3')->nullable();
            $table->string('code_devise_delta')->nullable();
            $table->boolean('nb_arrondi')->default(0)->nullable();



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
