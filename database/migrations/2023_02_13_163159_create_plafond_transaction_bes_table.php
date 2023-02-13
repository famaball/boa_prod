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
        Schema::create('plafond_transaction_bes', function (Blueprint $table) {
            // $table->increments('id');
            $table->tinyIncrements('id');
            $table->string('source')->nullable()->index();
            $table->string('destination')->nullable();
            $table->integer('devise')->default(0);
            $table->double('montant_limite')->default(0);
            $table->tinyInteger('type_trans')->default(1)->nullable();
            $table->boolean('to_be_on_hold')->default(1)->nullable();
            $table->timestamp('date_insert')->useCurrent();
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
        Schema::dropIfExists('plafond_transaction_bes');
    }
};
