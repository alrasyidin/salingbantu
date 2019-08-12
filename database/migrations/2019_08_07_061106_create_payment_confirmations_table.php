<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentConfirmationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_confirmations', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('user_id',36);
            $table->string('transaction_id',36);
            $table->unsignedBigInteger('value');
            $table->date('payment_date');
            $table->string('payment_doc');
            $table->string('user_creditacc');
            $table->string('admin_creditacc');
            $table->integer('status')->default(0); // 0: diajukan 1: diterima 2: gagal

            $table->foreign('user_creditacc')->references('id')->on('credit_accounts');
            $table->foreign('admin_creditacc')->references('id')->on('admin_credit_accounts');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('transaction_id')->references('id')->on('transactions');
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
        Schema::dropIfExists('payment_confirmations');
    }
}
