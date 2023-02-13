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
        Schema::create('message_sms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url_sms');
            $table->string('user_sms');
            $table->string('pwd_sms');
            $table->text('msg_envoi')->nullable();
            $table->text('msg_destination')->nullable();
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
        Schema::dropIfExists('message_sms');
    }
};
