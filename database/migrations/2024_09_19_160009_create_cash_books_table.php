<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_books', function (Blueprint $table) {
            $table->id();
            $table->text('cashbook_date')->nullable();
            $table->text('coa_acc_type_id_1')->nullable();
            $table->text('coa_acc_type_id_2')->nullable();
            $table->text('voucher')->nullable();
            $table->text('debit')->nullable();
            $table->text('credit')->nullable();
            $table->text('cashbook_description')->nullable();
            $table->text('taxes')->nullable();
            $table->text('currency')->nullable();
            $table->text('rate')->nullable();
            $table->text('total_amount')->nullable();
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
        Schema::dropIfExists('cash_books');
    }
}
