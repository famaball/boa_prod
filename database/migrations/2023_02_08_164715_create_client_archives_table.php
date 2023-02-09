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
            $table->string('numero_identification',20)->index();
            $table->string('nom',200);
            $table->string('prenom',200);
            $table->string('telephone',20);
            $table->string('fax',20);
            $table->string('adresse',250);
            $table->string('email',50);
            $table->string('ville',50);
            $table->string('pays',20);
            $table->tinyInteger('nbre_emission')->default(0);
            $table->string('nbre_payement')->default(0);
            $table->string('code_zip',10);
            $table->string('etat',10);
            $table->string('numero_piece',20);
            $table->date('date_naissance')->default('0000-00-00');
            $table->string('lieu_naissance',20);
            $table->string('nom_mere',50);
            $table->integer('increment')->nullable();
            $table->string('nationalite',20);
            $table->string('genre',5);
            $table->string('profession', 30);
            $table->string('type_piece', 5);
            $table->string('province', 20);
            $table->datetime('date_insert')->nullable();
            $table->date('date_expiration')->nullable();
            $table->date('date_emission')->nullable();
            $table->string('lieu_emission', 5)->nullable();
            $table->integer('a_supprimer')->nullable();
            $table->string('autre_id', 20)->nullable();
            $table->string('telephone_port', 20)->nullable();
            $table->string('numero_compte', 30)->nullable();
            $table->smallInteger('suspect')->nullable();
            $table->tinyInteger('type_client')->nullable();
            $table->string('partenaire', 20);
            $table->string('id_code_client', 10)->nullable();
            $table->string('code_ville_residence', 10)->nullable();
            $table->string('code_province_residence', 10)->nullable();
            $table->string('pays_naissance', 3)->nullable();
            $table->string('code_fiscale',20)->nullable();
            $table->string('code_vat',20)->nullable();
            $table->boolean('m_e_i_siar')->nullable();
            $table->string('numero_carte',25)->nullable();
            $table->boolean('telephone_traite')->nullable();
            $table->string('numero_telephone_traite',30)->nullable();
            $table->boolean('is_emetteur_titulaire',20)->nullable()->defaultValue(1);
            $table->boolean('is_politique_expo',20)->nullable()->default(0);
            $table->boolean('province_naissance',50)->nullable();
            $table->boolean('ville_naissance',50)->nullable()->default(0);
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
