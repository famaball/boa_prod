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
        Schema::create('alternates', function (Blueprint $table) {
            $table->integer('ent_num')->index()->default(0);
            $table->integer('alt_num')->primary()->default(0);
            $table->string('alt_type')->nullable();
            $table->string('alt_nom')->nullable();
            $table->string('alt_prenom')->nullable();
            $table->string('alt_remarks')->nullable();
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
        Schema::dropIfExists('alternates');
    }
};
