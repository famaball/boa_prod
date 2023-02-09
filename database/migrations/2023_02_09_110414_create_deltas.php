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
        Schema::create('deltas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_transaction', 50)->index();
            $table->string('code_schema', 50)->nullable();
            $table->string('sens', 3)->nullable();
            $table->string('numero_compte', 30);
            $table->double('montant')->default(0);
            $table->timestamp('date')->index()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->boolean('lu')->nullable()->default(0);
            $table->boolean('reponse')->nullable()->default(0);
            $table->string('reference_postillon', 20)->index();
            $table->string('pan', 16)->nullable();
            $table->datetime('date_expiration', 4)->nullable();
            $table->string('retrieval_reference_number', 12)->nullable();
            $table->string('debit_account', 60)->nullable();
            $table->string('credit_account', 60)->nullable();
            $table->string('devise', 3)->nullable();
            $table->string('structure', 20)->index()->nullable();
            $table->string('response_code', 2)->nullable();
            $table->string('f_t_number', 30)->index()->nullable();
            $table->double('f_t_amount')->nullable();
            $table->string('query', 20)->index()->nullable();
            $table->string('query_type', 20)->index()->nullable();
            $table->string('query_e_code', 20)->nullable();
            $table->string('query_e_desc', 100)->nullable();
            $table->string('customer_debit_account', 30)->nullable();
            $table->string('customer_credit_account', 30)->nullable();
            $table->string('branch', 20)->nullable();
            $table->datetime('f_t_date_response')->nullable()->default('0000-00-00 00:00:00');
            $table->string('t_code', 20)->nullable();
            $table->string('s_last_name', 50)->nullable();
            $table->string('s_first_name', 50)->nullable();
            $table->string('r_last_name', 50)->nullable();
            $table->string('r_first_name', 50)->nullable();
            $table->string('a_c_query', 20)->index()->nullable();
            $table->string('a_c_query_e_desc', 100)->nullable();
            $table->boolean('ref_and_a_c_c_valid')->default(0);
            $table->string('r_t_number', 20)->index()->nullable();
            $table->smallInteger('nature_operation')->nullable();
            $table->tinyInteger('type_ransaction')->nullable()->default(0);
            $table->string('structure_payement', 210)->nullable()->index();
            $table->string('branch_payement', 10)->nullable();
            $table->string('branch_envoi', 14)->nullable();
            $table->smallInteger('partie_entiere')->nullable()->default(0);
            $table->string('impacted_account_name', 50)->nullable();
            $table->string('generateur', 20)->nullable();
            $table->smallInteger('pivot')->nullable()->default(0);
            $table->datetime('date_sent')->nullable()->default('0000-00-00 00:00:00');
            $table->string('new_x_ref', 20)->nullable()->index();
            $table->string('num_batch', 10)->nullable();
            $table->boolean('valide_entrees')->nullable()->default(0);
            $table->double('montant_compte_client')->nullable()->default(0);
            $table->string('code_devise_delta', 3)->nullable();
            $table->string('chapitre_compta', 10)->nullable();
            $table->string('code_operation_delta', 3)->nullable();
            $table->string('num_mouv_delta', 6)->nullable();
            $table->string('code_utilisateur_delta', 30)->nullable();
            $table->string('cle_compte', 2)->nullable();
            $table->string('code_service_delta', 4)->nullable();
            $table->string('libelle_delta', 100)->nullable();
            $table->string('exoneration_comm', 1)->nullable()->default('0');
            $table->string('numero_piece_delta', 20)->nullable();
            $table->double('ecart_dr_cr')->nullable()->default(0);
            $table->string('code_structure_master', 10)->nullable();
            $table->string('structure_code', 10)->nullable()->index();
            $table->string('code_structure_master_2', 10)->nullable();
            $table->string('account_description', 100)->nullable();
            $table->boolean('arrondi')->nullable()->default(0);
            $table->datetime('date_operation')->nullable();

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
        Schema::dropIfExists('deltas');
    }
};
