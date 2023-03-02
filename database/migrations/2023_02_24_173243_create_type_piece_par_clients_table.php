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
        Schema::create('type_piece_par_clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_client');
            $table->string('type_piece');
            $table->string('numero_piece');
            $table->string('pays_delivrance');
            $table->timestamp('date_insert')->useCurrent();
            $table->dateTime('date_derniere_use')->nullable()->default('0000-00-00 00:00:00');
            $table->boolean('active')->nullable()->default(0);
            $table->date('date_delivrance')->nullable()->default('0000-00-00');
            $table->date('date_expiration')->nullable()->default('0000-00-00');
            $table->boolean('status')->nullable()->default(1);
            $table->string('pun')->nullable();
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
        Schema::dropIfExists('type_piece_par_clients');
    }
};
