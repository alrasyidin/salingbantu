<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_accounts', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->bigInteger('number');
            $table->string('holder_name', 255);
            $table->string('email', 255)->nullable();
            $table->string('phone', 255)->nullable();
            $table->char('user_id', 36);
            $table->boolean('primary')->default(0);
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('credit_accounts');
    }
}
