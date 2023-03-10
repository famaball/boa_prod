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
        Schema::create('correspondance_devise_archives', function (Blueprint $table) {
            $table->increments('id');
            $table->char('pays')->nullable();
            $table->char('devise_envoi')->nullable();
            $table->char('devise_payement')->nullable();
            $table->double('cour_vente_partenaire', 15 , 7)->nullable()->default(0.0000000);
            $table->double('cour_vente_pratique', 15 , 7)->nullable()->default(0.0000000);
            $table->double('spread', 15 , 7)->nullable()->default(0.0000000);
            $table->double('cour_achat', 15 , 7)->nullable()->default(0.0000000);
            $table->string('operateur')->nullable();
            $table->datetime('date_entree')->nullable();
            $table->datetime('date_insert')->nullable();
            $table->tinyInteger('est_valide')->nullable()->default(0);
            $table->datetime('date_entree_nv')->nullable()->default('0000-00-00 00:00:00');
            $table->string('operateur_nv')->nullable();
            $table->double('cour_achat_nv', 15 , 7)->nullable()->default(0.0000000);
            $table->double('spread_nv', 15 , 7)->nullable()->default(0.0000000);
            $table->double('cour_vente_pratique_nv', 15 , 7)->nullable()->default(0.0000000);
            $table->double('cour_vente_partenaire_nv', 15 , 7)->nullable()->default(0.0000000);
            $table->tinyInteger('choix_maj')->nullable()->default(0);
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
        Schema::dropIfExists('correspondance_devise_archives');
    }
};
