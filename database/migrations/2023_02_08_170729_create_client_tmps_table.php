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
        Schema::create('client_tmps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_identification')->index();
            $table->string('nom');
            $table->string('prenom');
            $table->string('telephone')->index();
            $table->string('fax');
            $table->string('adresse');
            $table->string('email');
            $table->string('ville');
            $table->string('pays')->index();
            $table->integer('nbre_emission')->default(0)->nullable();
            $table->integer('nbre_payement')->default(0)->nullable();
            $table->string('code_zip');
            $table->string('etat');
            $table->string('numero_piece')->index();
            $table->date('date_naissance');
            $table->string('lieu_naissance');
            $table->string('nom_mere');
            $table->integer('increment')->index();
            $table->string('nationalite');
            $table->string('genre');
            $table->string('profession');
            $table->string('type_piece')->index();
            $table->string('province');
            $table->timestamp('date_insert')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->date('date_expiration')->nullable();
            $table->date('date_emission')->nullable();
            $table->string('lieu_emission')->nullable();
            $table->boolean('a_supprimer')->default(0)->nullable();
            $table->string('autre_id');
            $table->string('telephone_port')->nullable()->index();
            $table->string('numero_compte')->nullable()->index();
            $table->smallInteger('suspect')->default(0)->nullable();
            $table->string('partenaire');
            $table->string('id_code_client')->nullable();
            $table->string('code_ville_residence')->nullable();
            $table->string('code_province_residence')->nullable();
            $table->string('pays_naissance')->nullable();
            $table->string('code_fiscale')->nullable();
            $table->string('numero_carte')->nullable();
            $table->boolean('telephone_traite')->default(0)->nullable();
            $table->string('numero_telephone_traite')->nullable();
            $table->string('province_naissance')->nullable();
            $table->string('ville_naissance')->nullable();
            $table->string('nom_benef_remb')->nullable();
            $table->string('autre_type_piece')->nullable();
            $table->boolean('traite')->nullable()->default(0);
            $table->string('operateur_create')->nullable();
            $table->string('operateur_valide')->nullable();
            $table->datetime('date_valide_rejet')->nullable();
            $table->boolean('is_business')->nullable()->default(0);
            $table->string('type_client')->nullable();
            $table->boolean('is_client_ppe')->nullable()->default(0);
            $table->string('is_compliance')->nullable();
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
        Schema::dropIfExists('client_tmps');
    }
};
