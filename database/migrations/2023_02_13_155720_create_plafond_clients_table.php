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
        Schema::create('plafond_clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('source')->nullable()->index();
            $table->string('destination')->nullable();
            $table->integer('devise')->default(0);
            $table->double('montant_limite')->default(0);
            $table->char('type_plafond')->nullable();
            $table->boolean('to_be_on_hold')->default(0)->nullable();
            // $table->timestamp('date_insert')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('date_insert')->useCurrent();

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
        Schema::dropIfExists('plafond_clients');
    }
};
