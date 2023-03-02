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
        Schema::create('demande_annulations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_transaction')->index();
            $table->string('structure')->nullable();
            $table->string('code_op_demandeur');
            $table->string('code_op_validateur');
            $table->datetime('date_demande')->default('0000-00-00 00:00:00');
            $table->datetime('date_validation')->default('0000-00-00 00:00:00');
            $table->string('motif_annullation')->nullable();
            $table->tinyInteger('est_traitee')->unsigned()->default(0);
            $table->char('type_transaction')->nullable();
            $table->integer('audit_log')->unsigned()->default(0);
            $table->string('ip_demandeur')->nullable();
            $table->string('ip_validateur')->nullable();
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
        Schema::dropIfExists('demande_annulations');
    }
};
