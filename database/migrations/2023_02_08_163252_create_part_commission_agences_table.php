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
        Schema::create('part_commission_agences', function (Blueprint $table) {
            $table->increments('id');
            $table->double('part_com_agence')->nullable()->default(0);
            $table->double('part_emission_agence')->nullable()->default(0);
            $table->double('part_payement_agence')->nullable()->default(0);
            $table->double('part_reseau_agence')->nullable()->default(0);
            $table->double('part_deposit_master_d')->nullable()->default(0);
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
        Schema::dropIfExists('part_commission_agences');
    }
};
