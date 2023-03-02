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
        Schema::create('ws_partenaires', function (Blueprint $table) {
            $table->increments('id');
            $table->string('structure')->nullable()->unique();
            $table->string('id_partenaire')->nullable()->index();
            $table->boolean('rappro_cfa')->nullable()->default(1);
            $table->boolean('send_in_euro')->nullable()->default(0);
            $table->string('username')->nullable();
            $table->string('passwd')->nullable();
            $table->string('param1')->nullable();
            $table->string('param2')->nullable();
            $table->string('param3')->nullable();
            $table->boolean('iso_currency')->nullable()->default(1);
            $table->boolean('iso_country')->nullable()->default(3);
            $table->boolean('send_in_payout_curr')->nullable()->default(1);
            $table->text('ws_url')->nullable();
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
        Schema::dropIfExists('ws_partenaires');
    }
};
