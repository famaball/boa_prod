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
        Schema::create('histo_ctrl_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_transaction',20);
            $table->string('station',20);
            $table->timestamp('date_insert')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('page_origine',200)->default(0);
            $table->string('host',50);
            $table->string('sid',70);
            $table->string('code_operateur',20);
            $table->boolean('bloquer')->nullable()->default(0);
            $table->string('motif_blocage',15)->nullable();
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
        Schema::dropIfExists('histo_ctrl_transactions');
    }
};
