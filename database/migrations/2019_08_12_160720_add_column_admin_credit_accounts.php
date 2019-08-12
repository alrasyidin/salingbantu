<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnAdminCreditAccounts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admin_credit_accounts', function (Blueprint $table) {
            $table->char('admin_id', 36);
            $table->foreign('admin_id')->references('id')->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('admin_credit_accounts', function (Blueprint $table) {
            $table->dropForeign('dmin_credit_accounts_admin_id_foreign');
            $table->dropColumn('admin_id');

        });
    }
}
