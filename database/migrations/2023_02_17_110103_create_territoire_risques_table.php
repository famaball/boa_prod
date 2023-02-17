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
        Schema::create('territoire_risques', function (Blueprint $table) {
            $table->id();
            $table->string('pays_source');
            $table->string('code_pays')->index();
            $table->string('designation');
            $table->timestamp('date_insert')->useCurrent();
            $table->dateTime('date_maj')->default('0000-00-00 00:00:00')->nullable();
            $table->boolean('activer')->nullable()->default(0);
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
        Schema::dropIfExists('territoire_risques');
    }
};
