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
        Schema::create('beneficiaire_societes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_client',10)->index()->nullable();
            $table->string('id_benef',10)->index()->nullable();
            $table->timestamp('date_insert')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('code_structure',20);
            $table->string('Code_agence',20);
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
        Schema::dropIfExists('beneficiaire_societes');
    }
};
