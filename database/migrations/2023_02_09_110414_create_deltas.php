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
            $table->string('numero_transaction')->index();
            $table->string('code_schema')->nullable();
            $table->string('sens')->nullable();
            $table->string('numero_compte');
            $table->double('montant')->default(0);
            $table->timestamp('date')->index()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->boolean('lu')->nullable()->default(0);
            $table->boolean('reponse')->nullable()->default(0);
            $table->string('reference_postillon')->index();
            $table->string('pan')->nullable();
            $table->datetime('date_expiration')->nullable();
            $table->string('retrieval_reference_number')->nullable();
            $table->string('debit_account')->nullable();
            $table->string('credit_account')->nullable();
            $table->string('devise')->nullable();
            $table->string('structure')->index()->nullable();
            $table->string('response_code')->nullable();
            $table->string('f_t_number')->index()->nullable();
            $table->double('f_t_amount')->nullable();
            $table->string('query')->index()->nullable();
            $table->string('query_type')->index()->nullable();
            $table->string('query_e_code')->nullable();
            $table->string('query_e_desc')->nullable();
            $table->string('customer_debit_account')->nullable();
            $table->string('customer_credit_account')->nullable();
            $table->string('branch')->nullable();
            $table->datetime('f_t_date_response')->nullable()->default('0000-00-00 00:00:00');
            $table->string('t_code')->nullable();
            $table->string('s_last_name')->nullable();
            $table->string('s_first_name')->nullable();
            $table->string('r_last_name')->nullable();
            $table->string('r_first_name')->nullable();
            $table->string('a_c_query')->index()->nullable();
            $table->string('a_c_query_e_desc')->nullable();
            $table->boolean('ref_and_a_c_c_valid')->default(0);
            $table->string('r_t_number')->index()->nullable();
            $table->smallInteger('nature_operation')->nullable();
            $table->tinyInteger('type_ransaction')->nullable()->default(0);
            $table->string('structure_payement')->nullable()->index();
            $table->string('branch_payement')->nullable();
            $table->string('branch_envoi')->nullable();
            $table->smallInteger('partie_entiere')->nullable()->default(0);
            $table->string('impacted_account_name')->nullable();
            $table->string('generateur')->nullable();
            $table->smallInteger('pivot')->nullable()->default(0);
            $table->datetime('date_sent')->nullable()->default('0000-00-00 00:00:00');
            $table->string('new_x_ref')->nullable()->index();
            $table->string('num_batch')->nullable();
            $table->boolean('valide_entrees')->nullable()->default(0);
            $table->double('montant_compte_client')->nullable()->default(0);
            $table->string('code_devise_delta')->nullable();
            $table->string('chapitre_compta')->nullable();
            $table->string('code_operation_delta')->nullable();
            $table->string('num_mouv_delta')->nullable();
            $table->string('code_utilisateur_delta')->nullable();
            $table->string('cle_compte')->nullable();
            $table->string('code_service_delta')->nullable();
            $table->string('libelle_delta')->nullable();
            $table->string('exoneration_comm')->nullable()->default(0);
            $table->string('numero_piece_delta')->nullable();
            $table->double('ecart_dr_cr')->nullable()->default(0);
            $table->string('code_structure_master')->nullable();
            $table->string('structure_code')->nullable()->index();
            $table->string('code_structure_master_2')->nullable();
            $table->string('account_description')->nullable();
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
