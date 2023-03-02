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
        Schema::create('log_operations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_operation')->nullable();
            $table->string('libelle_operation')->nullable();
            $table->string('structure')->nullable();
            $table->string('agence')->nullable();
            $table->string('code_operateur');
            $table->string('numero_carte')->nullable();
            $table->string('resultat');
            $table->datetime('date_operation')->nullable()->default('0000-00-00 00:00:00');
            $table->string('result_cryptogram')->nullable();
            $table->string('transaction_reference')->nullable();
            $table->string('etz_reference')->nullable();
            $table->string('observations')->nullable();
            $table->string('operation_key')->nullable();
            $table->string('ref_transaction')->nullable();
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
        Schema::dropIfExists('log_operations');
    }
};
