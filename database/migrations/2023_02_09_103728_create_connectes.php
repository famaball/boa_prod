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
        Schema::create('connectes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('var_code')->index();
            $table->string('last_activite')->nullable();
            $table->dateTime('date_activite')->nullable();
            $table->string('numero_serie')->index();
            $table->string('session_id')->index();
            $table->string('session_uid')->nullable();
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
        Schema::dropIfExists('connectes');
    }
};
