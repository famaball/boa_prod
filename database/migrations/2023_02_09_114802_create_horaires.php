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
        Schema::create('horaires', function (Blueprint $table) {
            $table->increments('id');
            $table->time('heure_debut')->nullable();
            $table->time('heure_fin')->nullable();
            $table->string('structure',20)->nullable()->index();
            $table->boolean('activer')->nullable()->default(0);
            $table->boolean('jour')->nullable()->default(0)->index();
            $table->string('type_horaire',5)->nullable()->index();

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
        Schema::dropIfExists('horaires');
    }
};
