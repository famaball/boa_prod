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
        Schema::create('archive_tarifs', function (Blueprint $table) {
            $table->increments('id');
            $table->double('taux')->default(0);
            $table->double('montant')->default(0);
            $table->string('zone',20);
            $table->boolean('mode')->default(0);
            $table->smallInteger('TypeTransaction')->default(1);
            $table->string('destination',10)->nullable();
            $table->boolean('type_source')->nullable();
            $table->string('operateur_saisi',20)->nullable();
            $table->boolean('type_archive')->nullable();
            $table->string('operateur_rejet',20)->nullable();
            $table->string('motif_rejet',60)->nullable();
            $table->timestamp('date_operation')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->boolean('source_saisie')->nullable();
            $table->string('code_tarif',20)->nullable();
            $table->boolean('status')->default(0)->nullable();
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
        Schema::dropIfExists('archive_tarifs');
    }
};
