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
        Schema::create('type_pieces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_piece')->unique();
            $table->string('designation')->nullable();
            $table->string('designation_anglais')->nullable();
            $table->boolean('activer_tp')->nullable()->default(0);
            $table->string('label')->nullable();






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
        Schema::dropIfExists('type_pieces');
    }
};
