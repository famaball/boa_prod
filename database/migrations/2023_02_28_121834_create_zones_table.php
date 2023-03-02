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
        Schema::create('zones', function (Blueprint $table) {
            $table->tinyInteger('id')->index();
            $table->char('code_zone')->primary();
            $table->string('designation')->default(0);
            $table->integer('devise')->default(0);
            $table->double('montant_limite_zone')->default(1000000);
            $table->double('montant_limite_hors_zone')->default(300000);
            $table->tinyInteger('devise_intermediaire')->nullable()->default(9);
            $table->boolean('activer')->nullable()->default(1);
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
        Schema::dropIfExists('zones');
    }
};
