<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChartofAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chartof_accounts', function (Blueprint $table) {
            $table->id();
            $table->text('coa_number')->unique();
            $table->text('coa_name')->nullable();
            $table->integer('account_type_id')->nullable();
            $table->integer('classification_id')->nullable();
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
        Schema::dropIfExists('chartof_accounts');
    }
}
