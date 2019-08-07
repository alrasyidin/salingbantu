<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminCreditAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_credit_accounts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->bigInteger('number');
            $table->string('holder_name', 255);
            $table->string('email', 255)->nullable();
            $table->string('phone', 255)->nullable();
            $table->boolean('primary')->default(0);
            $table->integer('bank_id')->unsigned();
            $table->foreign('bank_id')->references('code')->on('banks');
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
        Schema::dropIfExists('admin_credit_account');
    }
}
