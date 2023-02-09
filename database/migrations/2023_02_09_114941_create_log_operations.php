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
            $table->string('code_operation',20)->nullable();
            $table->string('libelle_operation',20)->nullable();
            $table->string('structure',20)->nullable();
            $table->string('agence',20)->nullable();
            $table->string('code_operateur', 20);
            $table->string('numero_carte')->nullable();
            $table->string('resultat', 20);
            $table->datetime('date_operation')->nullable()->default('0000-00-00 00:00:00');
            $table->string('result_cryptogram',50)->nullable();
            $table->string('transaction_reference',50)->nullable();
            $table->string('etz_reference',50)->nullable();
            $table->string('observations',50)->nullable();
            $table->string('operation_key',100)->nullable();
            $table->string('ref_transaction',20)->nullable();
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
