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
        Schema::create('tfa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('otp_code_op')->index();
            $table->string('otp_secret')->nullable();
            $table->string('otp_session_id')->nullable();
            $table->dateTime('otp_date_insert')->nullable();
            $table->string('otp_session_ip')->nullable()->index();
            $table->char('otp_session_pays')->nullable();
            $table->string('otp_sync_value')->nullable()->index();
            $table->tinyInteger('otp_ntc')->nullable()->default(-1);
            $table->tinyInteger('otp_sync_ntc')->nullable()->default(-1);
            $table->integer('otp_expiry_delai')->nullable()->default(0);
            $table->string('otp_ref')->nullable()->index();
            $table->char('status')->nullable()->index();
            $table->string('nbf_tel')->nullable()->index();
            $table->string('id_message')->nullable();
            $table->char('group_id_stat')->nullable()->index();
            $table->string('group_name_stat')->nullable();
            $table->char('id_stat')->nullable();
            $table->string('name_stat')->nullable();
            $table->string('description_stat')->nullable();
            $table->string('code_reponse')->nullable()->default('0000')->index();
            $table->char('nb_message')->nullable();
            $table->boolean('otp_active')->nullable()->default(1);
            $table->double('msg_tarif')->nullable()->default(0);
            $table->char('msg_currency')->nullable();
            $table->dateTime('deliv_date')->nullable()->default('0000-00-00 00:00:00');
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
        Schema::dropIfExists('tfa');
    }
};
