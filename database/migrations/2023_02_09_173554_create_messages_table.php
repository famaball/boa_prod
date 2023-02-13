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
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_message')->default(0);
            $table->string('objet')->default(0);
            $table->text('detail');
            $table->tinyInteger('duree_de_vie')->default(0);
            $table->datetime('date')->default('0000-00-00 00:00:00');
            $table->string('code_operateur');
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
        Schema::dropIfExists('messages');
    }
};
