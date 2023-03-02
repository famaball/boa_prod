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
        Schema::create('numero_client_interfaces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero')->unique();
            $table->datetime('date_generation')->default('0000-00-00 00:00:00');
            $table->datetime('date_reservation')->default('0000-00-00 00:00:00');
            $table->integer('deja_pris')->default(0);
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
        Schema::dropIfExists('numero_client_interfaces');
    }
};
