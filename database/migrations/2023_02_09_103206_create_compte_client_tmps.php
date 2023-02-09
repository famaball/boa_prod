<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('compte_client_tmps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_banque', 10)->index();
            $table->string('numero_compte', 70)->unique();
            $table->boolean('traite')->default(0)->nullable();
            $table->string('numero_identification', 20)->index();
            $table->timestamp('date_insert')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('intitule', 70)->nullable();
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
        Schema::dropIfExists('compte_client_tmps');
    }
};
