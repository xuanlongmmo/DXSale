<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDxlaunchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dxlaunches', function (Blueprint $table) {
            $table->increments('id');
            $table->text('token');
            $table->text('token_name');
            $table->text('token_symbol');
            $table->text('token_decimal');
            $table->integer('price');
            $table->integer('rate');
            $table->integer('soft');
            $table->integer('hard');
            $table->float('min')->nullable();
            $table->float('max')->nullable();
            $table->integer('liquidity');
            $table->integer('uniswap_rate')->nullable();
            $table->dateTime('start');
            $table->dateTime('end');
            $table->dateTime('lock');
            $table->text('description')->nullable();
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
        Schema::dropIfExists('dxlaunches');
    }
}
