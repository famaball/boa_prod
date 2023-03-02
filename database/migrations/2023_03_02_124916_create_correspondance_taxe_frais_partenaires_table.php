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
        Schema::create('correspondance_taxe_frais_partenaires', function (Blueprint $table) {
            $table->increments('id');
            $table->double('taux')->default(0);
            $table->double('montant')->default(0);
            $table->string('partenaire',10)->index();
            $table->boolean('mode')->default(0);
            $table->boolean('type_repartition')->default(0);
            $table->smallInteger('type_transaction')->default(1);
            $table->string('destination')->nullable();
            $table->double('taux_mini')->default(0)->nullable();
            $table->char('code_devise')->nullable();
            $table->double('montant_devise')->nullable()->default(0);
            // $table->double('taux_devise')->nullable()->default(0.0000000);
            $table->double('taux_devise', 15 , 7)->nullable()->default(0.0000000);
            $table->double('taux_devise_mini')->nullable()->default(0);
            $table->string('partenaire_id')->index();
            $table->boolean('sens_op')->default(0)->nullable();
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
        Schema::dropIfExists('correspondance_taxe_frais_partenaires');
    }
};
