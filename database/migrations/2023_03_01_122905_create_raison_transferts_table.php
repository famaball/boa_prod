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
        Schema::create('raison_transferts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_raison')->unique();
            $table->string('label');
            $table->string('description');
            $table->string('structure');
            $table->boolean('active')->nullable()->default(0);
            $table->boolean('is_business')->nullable()->default(0);
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
        Schema::dropIfExists('raison_transferts');
    }
};
