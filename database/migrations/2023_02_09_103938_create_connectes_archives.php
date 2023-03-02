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
        Schema::create('connectes_archives', function (Blueprint $table) {
            $table->increments('id');
            $table->string('var_code')->index();
            $table->string('last_activite')->nullable();
            $table->string('date_activite')->nullable();
            $table->string('numero_serie')->index();
            $table->string('session_id')->index();
            $table->string('session_uid')->nullable();
            $table->timestamp('date_insert')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('description')->nullable();
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
        Schema::dropIfExists('connectes_archives');
    }
};
