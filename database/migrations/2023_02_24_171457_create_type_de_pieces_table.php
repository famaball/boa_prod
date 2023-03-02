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
        Schema::create('type_de_pieces', function (Blueprint $table) {
            $table->increments('id');
            $table->char('type_piece')->unique();
            $table->string('label');
            $table->boolean('activer_tp')->default(1);
            // $table->boolean('activer_tp')->default(true);
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
        Schema::dropIfExists('type_de_pieces');
    }
};
