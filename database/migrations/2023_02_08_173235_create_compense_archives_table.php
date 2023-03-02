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
        Schema::create('compense_archives', function (Blueprint $table) {
            $table->increments('id');
            $table->string('structure');
            $table->string('numero_compte');
            $table->timestamp('date_effet');
            $table->timestamp('date_compense');
            $table->double('montant')->default(0);
            $table->smallInteger('sens')->default(0);
            $table->double('plafond_emission')->default(0);
            $table->string('numero_operation');
            $table->smallInteger('type_variation')->default(0);
            $table->double('variation')->default(0);
            $table->smallInteger('activer')->default(0);
            $table->timestamp('date');
            $table->smallInteger('niveau')->default(0);
            $table->string('observation');
            $table->string('operateur');
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
        Schema::dropIfExists('compense_archives');
    }
};
