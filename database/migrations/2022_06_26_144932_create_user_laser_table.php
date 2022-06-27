<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserLaserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
      public function up()
    {
        Schema::create('user_laser', function (Blueprint $table) {
            //user_idと_highlight_idを外部キーに設定
            $table->integer('user_id')->unsigned();    //users,lasersテーブルのidが
            $table->integer('laser_id')->unsigned();    //bigIncrementであった場合はbigIntegerにする
            $table->primary(['user_id', 'laser_id']);  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_user_laser');
    }
}
