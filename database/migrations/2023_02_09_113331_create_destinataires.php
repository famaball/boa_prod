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
        Schema::create('destinataires', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('date_emission')->default('0000-00-00 00:00:00');
            $table->datetime('date_reception')->default('0000-00-00 00:00:00');
            $table->smallInteger('etat')->default(0);
            $table->string('code_message',20)->default(0);
            $table->string('code_destinataire',20);
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
        Schema::dropIfExists('destinataires');
    }
};
