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
        Schema::create('operation_faxs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_transaction');
            $table->string('code_operateur');
            $table->dateTime('DateFax')->default('0000-00-00 00:00:00');
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
        Schema::dropIfExists('operation_faxs');
    }
};
