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
        Schema::create('banques', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_banque')->nullable()->index();
            $table->string('numero_compte_me')->nullable()->unique();
            $table->string('designation')->nullable();
            $table->string('abreviation')->nullable();
            $table->char('pays')->nullable()->index()->default('0SN');
            $table->boolean('type')->nullable()->default(0);
            $table->string('adresse')->nullable();
            $table->string('ville')->nullable();
            $table->string('telephones')->nullable();
            $table->boolean('activer_banque')->nullable()->index()->default(0);
            $table->boolean('autre_banque')->nullable()->index()->default(0);
            $table->boolean('check_compte')->nullable()->index()->default(0);
            $table->string('numero_compte_default')->nullable();
            $table->string('code_banque_commun')->nullable();
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
        Schema::dropIfExists('banques');
    }
};
