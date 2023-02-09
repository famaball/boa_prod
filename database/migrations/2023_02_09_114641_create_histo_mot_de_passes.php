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
        Schema::create('histo_mot_de_passes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('structure',20);
            $table->string('code_operateur',20);
            $table->string('mot_de_passe',70);
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
        Schema::dropIfExists('histo_mot_de_passes');
    }
};
