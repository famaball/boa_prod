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
            $table->string('var_code', 20)->index();
            $table->string('last_activite', 100)->nullable();
            $table->string('date_activite', 100)->nullable();
            $table->string('numero_serie', 100)->index();
            $table->string('session_id', 100)->index();
            $table->string('session_uid', 100)->nullable();
            $table->timestamp('date_insert')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('description', 50)->nullable();
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
