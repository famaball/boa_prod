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
        Schema::create('remboursement_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_transaction')->index();
            $table->string('structure')->nullable();
            $table->string('code_op_demandeur')->index();
            $table->string('code_op_validateur')->index();
            $table->dateTime('date_demande')->default('0000-00-00 00:00:00');
            $table->dateTime('date_validation')->default('0000-00-00 00:00:00');
            $table->string('motif_remboursement')->nullable();
            $table->boolean('est_traitee')->default(0);
            $table->char('type_transaction')->nullable();
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
        Schema::dropIfExists('remboursement_transactions');
    }
};
