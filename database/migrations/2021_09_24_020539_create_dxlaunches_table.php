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
            $table->text('name');
            $table->text('token');
            $table->integer('price');
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
