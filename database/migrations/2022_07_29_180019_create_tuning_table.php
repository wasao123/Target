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
            $table->string('title', 200);
            $table->integer('makeup_time')->unsigned();
            $table->integer('laser_evaluation')->unsigned();  //unsigned()型で定義
        
            $table->integer('charge_evaluation')->unsigned();   //unsigned()型で定義
        
            $table->integer('user_id')->unsigned();    //unsigned()型で定義
        //'user_id' は 'usersテーブル' の 'id' を参照する外部キーです
            $table->text('highlight_impressions', 1000)->nullable(); 
            $table->text('laser_impressions', 1000)->nullable(); 
            $table->text('charge_impressions', 1000)->nullable(); 
            
            $table->text('thank', 5000)->nullable(); 
            
             $table->integer('highlight_id')->unsigned();    //unsigned()型で定義
        //'highlight_id' は 'highlightsテーブル' の 'id' を参照する外部キーです
            $table->integer('laser_id')->unsigned()->nullable();    //unsigned()型で定義
        //'laser_id' は 'lasersテーブル' の 'id' を参照する外部キーです
            $table->integer('charge_id')->unsigned()->nullable();    //unsigned()型で定義
        //'charge_id' は 'chargesテーブル' の 'id' を参照する外部キーです
            
            $table->softDeletes();
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
