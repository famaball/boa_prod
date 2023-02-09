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
        Schema::create('compenses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('structure', 20);
            // $table->string('structure', 20)->primary();
            $table->string('numero_compte', 50);
            $table->datetime('date_effet')->default('0000-00-00 00:00:00');
            $table->datetime('date_compense')->default('0000-00-00 00:00:00');
            $table->double('montant')->default(0);
            $table->smallInteger('sens')->default(0);
            $table->double('plafond_emission')->default(0);
            $table->string('numero_operation', 50);
            $table->smallInteger('type_variation')->default(0);
            $table->double('variation')->default(0);
            $table->smallInteger('activer')->default(0);
            $table->datetime('date')->default('0000-00-00 00:00:00');
            $table->smallInteger('niveau')->default(0);
            $table->string('observation', 250);
            $table->string('operateur', 20);
            $table->double('plafond_devise')->default(0);
            $table->double('montant_devise')->default(0);
            $table->double('valeur_euro_en_cfa')->default(0);
            $table->smallInteger('commission')->default(0);
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
        Schema::dropIfExists('compenses');
    }
};
