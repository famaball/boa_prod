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
        Schema::create('partenaires', function (Blueprint $table) {
            $table->increments('id_partenaire');
            $table->string('code_secret_reseau')->nullable();
            $table->string('code_secret_admin')->nullable();
            $table->string('code_structure')->unique()->nullable();
            $table->integer('etat')->nullable()->default(1);
            $table->double('part_emission')->default(0.25);
            $table->double('part_payement')->default(0.25);
            $table->double('part_reseau')->default(0.5);
            $table->string('profil_inscription')->default('9e581b5df3beb081f4');
            $table->string('profil_validation')->default('e7f9e85048d952c5578');
            $table->string('cle_inscription')->default('327f5eeca578314b750cc5c0b680693a3180ad7fb81a4c386464387a0f5dcc89');
            $table->string('cle_validation')->default('327f5eeca578314b750cc5c0b680693a3180ad7fb81a4c386464387a0f5dcc89');
            $table->string('rf_partenaire')->nullable();
            $table->dateTime('date_creation_cle')->nullable()->default('0000-00-00 00:00:00');
            $table->boolean('ntc')->nullable()->default(0);
            $table->integer('delai_expiration_cle')->nullable()->default(0);
            $table->dateTime('date_expiration_cle')->nullable()->default('0000-00-00 00:00:00');
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
        Schema::dropIfExists('partenaires');
    }
};
