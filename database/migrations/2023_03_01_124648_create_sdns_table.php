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
        Schema::create('sdns', function (Blueprint $table) {
            // $table->integer('ent_num')->primary()->default(0);
            $table->increments('ent_num');
            $table->string('sdn_nom');
            $table->string('sdn_prenom')->nullable();
            $table->string('sdn_type');
            $table->string('program')->nullable();
            $table->string('title')->nullable();
            $table->string('remarks')->nullable();
            $table->date('dob')->nullable();
            $table->string('town_of_birth')->nullable();
            $table->string('country_of_birth')->nullable();
            $table->string('nationality')->nullable();
            $table->string('passport_details')->nullable();
            $table->string('ni_number')->nullable();
            $table->string('position')->nullable();
            $table->string('addresses')->nullable();
            $table->string('post_zip_code')->nullable();
            $table->string('country_name')->nullable();
            $table->string('other_information')->nullable();
            $table->string('group_type')->nullable();
            $table->string('alias_type')->nullable();
            $table->string('regime')->nullable();
            $table->date('listed_on')->nullable();
            $table->date('last_updated')->nullable();
            $table->string('group_id')->nullable();
            $table->string('regulation_of')->nullable();
            $table->string('sdn_nom3')->nullable();
            $table->string('sdn_nom4')->nullable();
            $table->string('sdn_nom5')->nullable();
            $table->string('sdn_Addresse2')->nullable();
            $table->string('sdn_Addresse3')->nullable();
            $table->string('sdn_Addresse4')->nullable();
            $table->string('sdn_Addresse5')->nullable();
            $table->string('sdn_Addresse6')->nullable();
            $table->string('sdn_nom2')->nullable();
            $table->char('code_nationality')->nullable();
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
        Schema::dropIfExists('sdns');
    }
};
