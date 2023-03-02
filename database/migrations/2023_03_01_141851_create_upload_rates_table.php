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
        Schema::create('upload_rates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('devise_origine');
            $table->string('devise_cible');
            $table->double('valeur')->default(0)->nullable();
            $table->timestamp('date_insert')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->tinyInteger('statut')->nullable()->default(0);
            $table->string('loader');
            $table->timestamp('upload_date')->default('0000-00-00 00:00:00');
            $table->double('valeur_nv')->default(0)->nullable();
            $table->double('selling_rate')->default(0)->nullable();
            $table->double('buying_rate')->default(0)->nullable();
            $table->double('selling_rate_nv')->default(0)->nullable();
            $table->double('buying_rate_nv')->default(0)->nullable();
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
        Schema::dropIfExists('upload_rates');
    }
};
