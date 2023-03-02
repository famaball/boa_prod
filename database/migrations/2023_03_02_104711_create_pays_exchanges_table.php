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
        Schema::create('pays_exchanges', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_pays_partenaire')->nullable();
            $table->char('indicatif');
            $table->string('partenaire');
            $table->char('iso_code_alpha_country')->nullable();
            $table->string('code_destination')->nullable();
            $table->string('agent_id')->nullable();
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
        Schema::dropIfExists('pays_exchanges');
    }
};
