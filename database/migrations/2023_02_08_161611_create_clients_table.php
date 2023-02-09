<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_identification', 20)->unique();
            $table->string('nom', 200);
            $table->string('prenom', 200);
            $table->string('telephone', 20)->index();
            $table->string('fax', 20);
            $table->string('adresse', 250);
            $table->string('email', 50);
            $table->string('ville', 50);
            $table->string('pays', 20)->index();
            $table->integer('nbre_emission')->default(0)->nullable();
            $table->integer('nbre_payement')->default(0)->nullable();
            $table->string('code_zip', 10);
            $table->string('etat', 20);
            $table->string('numero_piece', 20)->index();
            $table->date('date_naissance');
            $table->string('lieu_naissance', 20);
            $table->string('nom_mere', 50);
            $table->integer('increment')->index();
            $table->string('nationalite', 20);
            $table->string('genre', 5);
            $table->string('profession', 30);
            $table->string('type_piece', 5)->index();
            $table->string('province', 20);
            $table->timestamp('date_insert')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->date('date_expiration')->nullable();
            $table->date('date_emission')->nullable();
            $table->string('lieu_emission', 5)->nullable();
            $table->boolean('a_supprimer')->default(0)->nullable();
            $table->string('autre_id', 20);
            $table->string('telephone_port', 20)->nullable()->index();
            $table->string('numero_compte', 30)->nullable()->index();
            $table->smallInteger('suspect')->default(0)->nullable();
            $table->string('partenaire', 20);
            $table->string('id_code_client', 10)->nullable();
            $table->string('code_ville_residence', 10)->nullable();
            $table->string('code_province_residence', 10)->nullable();
            $table->string('pays_naissance', 3)->nullable()->index();
            $table->string('code_fiscale', 20)->nullable();
            $table->string('numero_carte', 25)->nullable();
            $table->boolean('telephone_traite')->default(0)->nullable();
            $table->string('numero_telephone_traite', 30)->nullable();
            $table->string('province_naissance', 5)->nullable();
            $table->string('ville_naissance', 10)->nullable();
            $table->string('nom_benef_remb', 70)->nullable();
            $table->string('autre_type_piece', 50)->nullable();
            $table->string('matricule', 20)->nullable();
            $table->boolean('client_boa')->default(0)->nullable();
            $table->boolean('is_business')->default(0)->nullable();
            $table->string('type_client', 2)->default('P')->nullable();
            $table->boolean('traite')->default(1)->nullable();
            $table->boolean('is_client_ppe')->default(0)->nullable();
            $table->boolean('is_compliance', 2)->nullable();
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
        Schema::dropIfExists('clients');
    }
};
