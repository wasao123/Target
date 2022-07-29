<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTuningTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tuning', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('highlight_id')->unsigned();    //unsigned()型で定義
        //'highlight_id' は 'highlightsテーブル' の 'id' を参照する外部キーです
            $table->integer('laser_evaluation')->unsigned()->nullable();    //unsigned()型で定義
        //'laser_id' は 'lasersテーブル' の 'id' を参照する外部キーです
            $table->integer('charge_evaluation')->unsigned()->nullable();    //unsigned()型で定義
        //'charge_id' は 'chargesテーブル' の 'id' を参照する外部キーです
            $table->integer('user_evaluation')->unsigned();    //unsigned()型で定義
        //'user_id' は 'usersテーブル' の 'id' を参照する外部キーです
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tuning');
    }
}
