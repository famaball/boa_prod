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
        Schema::create('parametres', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('delai')->default(15);
            $table->tinyInteger('ntc_maximum')->default(5);
            $table->tinyInteger('taille_page')->default(5);
            $table->tinyInteger('delai_max_expire_pwd')->default(30);
            $table->double('taxe_etat')->default(0);
            $table->double('part_emission')->default(0.25);
            $table->double('part_payement')->default(0.25);
            $table->double('part_reseau')->default(0.5);
            $table->double('parite_euro_cfa')->default(655);
            $table->double('decote')->default(10);
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
        Schema::dropIfExists('parametres');
    }
};
