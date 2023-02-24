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
        Schema::create('trackings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->index();
            $table->string('station');
            $table->dateTime('date')->index()->default('0000-00-00 00:00:00');
            $table->string('page_origine');
            $table->string('page_demande');
            $table->string('host');
            $table->integer('port');
            $table->string('user_agent');
            $table->string('sid');
            $table->string('numero_serie')->nullable();
            $table->string('observations')->nullable();
            $table->string('reference_code')->nullable()->index();
            $table->string('reference')->nullable();
            $table->string('identity_machine')->nullable();
            $table->string('address_mac_machine')->nullable();
            $table->string('bios_serial_number')->nullable();
            $table->string('hdd_serial_number')->nullable();
            $table->string('rf_partenaire')->nullable();
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
        Schema::dropIfExists('trackings');
    }
};
