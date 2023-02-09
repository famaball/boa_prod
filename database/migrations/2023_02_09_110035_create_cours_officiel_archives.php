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
        Schema::create('cours_officiel_archives', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_entree')->nullable()->index()->default(0000-00-00);
            $table->integer('devise_source')->index();
            $table->integer('devise_dest')->index();
            $table->double('cours_vente_off')->index();
            $table->double('cours_achat_off')->index();
            $table->string('code_operateur',20);
            $table->datetime('date_insert')->nullable();
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
        Schema::dropIfExists('cours_officiel_archives');
    }
};
