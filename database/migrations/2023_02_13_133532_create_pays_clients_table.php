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
        Schema::create('pays_clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_pays_client');
            $table->string('indicatif');
            $table->string('designation');
            $table->char('zone')->nullable();
            $table->string('designation_anglais')->nullable();
            $table->string('iso3_code')->nullable()->index();
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
        Schema::dropIfExists('pays_clients');
    }
};
