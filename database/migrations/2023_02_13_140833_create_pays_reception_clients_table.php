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
        Schema::create('pays_reception_clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_emetteur')->nullable()->index();
            $table->string('id_recepteur')->nullable()->index();
            $table->string('pays_recep');
            $table->timestamp('date_insert')->useCurrent();
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
        Schema::dropIfExists('pays_reception_clients');
    }
};
