<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDxlaunchTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dxlaunch_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dxlaunch_id')->unsigned();
            $table->foreign('dxlaunch_id')->references('id')->on('dxlaunches')->onDelete('cascade');
            $table->text('address')->nullable();
            $table->text('amount_eth')->nullable();
            $table->text('amount_token')->nullable();
            $table->text('status')->default(1);
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
        Schema::dropIfExists('dxlaunch_transactions');
    }
}
