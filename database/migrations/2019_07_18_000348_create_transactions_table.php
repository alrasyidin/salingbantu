<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->char('inv_number',36);
            $table->char('user_id',36);
            $table->char('campaign_id',36);
            $table->unsignedInteger('amount')->default(0);
            $table->text('note')->nullable();
            $table->tinyInteger('status')->default(0)->comment('
                0 => Waiting payment
                1 => User post confirmation
                3 => Confirmed
                4 => Rejected
                5 => Pending
            ');
            $table->foreign('campaign_id')->references('id')->on('campaigns');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('transactions');
    }
}
