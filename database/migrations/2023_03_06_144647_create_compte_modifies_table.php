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
        Schema::create('compte_modifies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_client')->index();
            $table->string('numero_transaction')->index()->nullable();
            $table->string('ancien_compte')->nullable();
            $table->string('nouveau_compte')->nullable();
            $table->string('code_operateur')->index();
            $table->dateTime('date_modif')->default('0000-00-00 00:00:00');
            $table->char('type_operation')->nullable();
            $table->tinyInteger('reactiver')->nullable()->default(0);
            $table->tinyInteger('rejeter')->nullable()->default(0);
            $table->string('type_client')->nullable();
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
        Schema::dropIfExists('compte_modifies');
    }
};
