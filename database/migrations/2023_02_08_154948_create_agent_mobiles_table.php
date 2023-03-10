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
        Schema::create('agent_mobiles', function (Blueprint $table) {
            $table->increments('id_agent');
            $table->string('nature_operation')->nullable();
            $table->string('numero_tel');
            $table->string('description_in')->nullable();
            $table->string('description_out')->nullable();
            $table->dateTime('date_oper')->default('0000-00-00 00:00:00')->nullable();
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
        Schema::dropIfExists('agent_mobiles');
    }
};
