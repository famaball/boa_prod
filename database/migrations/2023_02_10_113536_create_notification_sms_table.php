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
        Schema::create('notification_sms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_transaction');
            $table->string('pays');
            $table->string('telephone');
            $table->boolean('etat')->default(0);
            $table->timestamp('date_sms')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('langue')->default('français')->nullable();
            $table->double('montant')->default(0)->nullable();
            $table->string('prenom_emetteur')->nullable();
            $table->string('nom_emetteur')->nullable();
            $table->string('prenom_recepteur')->nullable();
            $table->string('nom_recepteur')->nullable();
            $table->double('emission_devise')->nullable()->default(0);
            $table->double('payement_devise')->nullable()->default(0);
            $table->boolean('type_notification')->default(0);
            $table->string('telephone_emetteur')->default(0);
            $table->string('symbole_devise')->nullable();
            $table->integer('devise_emission')->nullable()->default(0);
            $table->integer('devise_payement')->nullable()->default(0);
            $table->boolean('reponse')->nullable()->default(0);
            $table->boolean('type_transaction')->nullable()->default(0);
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
        Schema::dropIfExists('notification_sms');
    }
};
