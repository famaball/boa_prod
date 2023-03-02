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
        Schema::create('report_agences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_agence')->nullable();
            $table->double('report_devise')->nullable();
            $table->date('date_report')->nullable();
            $table->double('report_cfa')->nullable();
            $table->double('report_agence_devise')->nullable()->default(0);
            $table->double('report_agence_cfa')->nullable()->default(0);
            $table->string('report_ref')->nullable()->index();
            $table->double('report_agence_devise2')->nullable()->default(0);
            $table->double('report_agence_cfa2')->nullable()->default(0);
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
        Schema::dropIfExists('report_agences');
    }
};
