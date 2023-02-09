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
            $table->string('var_code', 20)->index();
            $table->string('last_activite', 100)->nullable();
            $table->dateTime('date_activite')->nullable();
            $table->string('numero_serie', 100)->index();
            $table->string('session_id', 100)->index();
            $table->string('session_uid', 100)->nullable();
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
