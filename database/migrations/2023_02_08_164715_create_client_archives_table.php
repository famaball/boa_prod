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
        Schema::create('client_archives', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_identification')->index();
            $table->string('nom');
            $table->string('prenom');
            $table->string('telephone');
            $table->string('fax');
            $table->string('adresse');
            $table->string('email');
            $table->string('ville');
            $table->string('pays');
            $table->tinyInteger('nbre_emission')->default(0);
            $table->tinyInteger('nbre_payement')->default(0);
            $table->string('code_zip');
            $table->string('etat');
            $table->string('numero_piece');
            $table->date('date_naissance')->default('0000-00-00');
            $table->string('lieu_naissance');
            $table->string('nom_mere');
            $table->integer('increment')->nullable();
            $table->string('nationalite');
            $table->string('genre');
            $table->string('profession');
            $table->string('type_piece');
            $table->string('province');
            $table->datetime('date_insert')->nullable();
            $table->date('date_expiration')->nullable();
            $table->date('date_emission')->nullable();
            $table->string('lieu_emission')->nullable();
            $table->integer('a_supprimer')->nullable()->default(1);
            $table->string('autre_id')->nullable();
            $table->string('telephone_port')->nullable();
            $table->string('numero_compte')->nullable()->index();
            $table->smallInteger('suspect')->nullable()->default(0);
            $table->boolean('type_client')->nullable()->default(0);
            $table->string('partenaire');
            $table->string('id_code_client')->nullable();
            $table->string('code_ville_residence')->nullable();
            $table->string('code_province_residence')->nullable();
            $table->string('pays_naissance')->nullable();
            $table->string('code_fiscale')->nullable();
            $table->string('code_vat')->nullable();
            $table->boolean('m_e_i_siar')->nullable()->default(0);
            $table->string('numero_carte')->nullable()->index();
            $table->boolean('telephone_traite')->nullable()->default(0);
            $table->string('numero_telephone_traite')->nullable();
            $table->boolean('is_emetteur_titulaire')->nullable()->defaul(1);
            $table->boolean('is_politique_expo')->nullable()->default(0);
            $table->string('province_naissance')->nullable();
            $table->string('ville_naissance')->nullable();
            $table->timestamp('date_archive')->useCurrent();
            $table->boolean('type_politique_expo')->default(-1)->nullable();
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
        Schema::dropIfExists('client_archives');
    }
};
