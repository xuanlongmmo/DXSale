<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDxlaunchInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dxlaunch_informations', function (Blueprint $table) {
            $table->bigInteger('dxlaunch_id')->unsigned();
            $table->foreign('dxlaunch_id')->references('id')->on('dxlaunches')->onDelete('cascade');
            $table->text('logo_link')->nullable();
            $table->text('website_link')->nullable();
            $table->text('github_link')->nullable();
            $table->text('twitter_link')->nullable();
            $table->text('reddit_link')->nullable();
            $table->text('telegram_link')->nullable();
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
        Schema::dropIfExists('dxlaunch_informations');
    }
}
