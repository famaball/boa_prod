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
        Schema::create('correspondance_taxe_frais', function (Blueprint $table) {
            $table->increments('id');
            $table->double('taux', 25, 15)->nullable();
            $table->double('montant')->default(0);
            $table->string('zone', 20)->index();
            $table->boolean('mode')->index()->default(0);
            $table->smallInteger('type_transaction')->default(1)->index();
            $table->string('destination', 10)->nullable()->index();
            $table->boolean('type_source')->nullable();
            $table->boolean('source_saisie')->nullable();
            $table->string('operateur_saisi', 20)->nullable()->index();
            $table->string('operateur_validation', 20)->nullable();
            $table->timestamp('date_saisie')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->timestamp('date_validation')->default('0000-00-00 00:00:00');
            $table->string('code_tarif', 20)->nullable();
            $table->boolean('status')->default(0);
            $table->double('taux_ht', 25, 15)->nullable();
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
        Schema::dropIfExists('correspondance_taxe_frais');
    }
};
