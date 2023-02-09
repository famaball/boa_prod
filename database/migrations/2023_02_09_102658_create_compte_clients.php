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
        Schema::create('compte_clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_banque', 10)->index();
            $table->string('numero_compte', 70)->unique();
            $table->string('numero_identification', 20)->index();
            $table->boolean('activer')->default(1)->nullable();
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
        Schema::dropIfExists('compte_clients');
    }
};
