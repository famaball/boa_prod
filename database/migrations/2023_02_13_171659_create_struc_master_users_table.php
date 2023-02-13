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
        Schema::create('struc_master_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('structure')->index();
            $table->string('code_master_user')->index();
            $table->dateTime('date_insert')->default('0000-00-00 00:00:00');
            $table->boolean('sm_user')->nullable()->default(0);
            $table->boolean('sm_agence')->nullable()->default(0);
            $table->boolean('sm_report')->nullable()->default(0);
            $table->boolean('sm_vir_agence')->nullable()->default(0);
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
        Schema::dropIfExists('struc_master_users');
    }
};
