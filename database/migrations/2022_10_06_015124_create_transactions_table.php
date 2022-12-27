<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            // $table->foreignId('user_id')->constrained('users');
            $table->integer('obr_no')->unique();
            $table->integer('dv_no')->unique();
            $table->longText('particular');
            $table->double('amount', 8, 2);
            $table->double('total_amt', 8, 2);
            $table->string('pr_no');
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
