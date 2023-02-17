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
        Schema::create('table_changes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('structure')->index();
            $table->smallInteger('devise')->default(0)->index();
            $table->double('valeur_achat')->default(0);
            $table->double('valeur_vente')->default(0);
            $table->string('code_operateur');
            $table->dateTime('date_entree')->default('0000-00-00 00:00:00');
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
        Schema::dropIfExists('table_changes');
    }
};
