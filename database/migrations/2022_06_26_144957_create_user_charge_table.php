<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserChargeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
       public function up()
    {
        Schema::create('user_charge', function (Blueprint $table) {
            //user_idと_highlight_idを外部キーに設定
            $table->integer('user_id')->unsigned();    //users,chargesテーブルのidが
            $table->integer('charge_id')->unsigned();    //bigIncrementであった場合はbigIntegerにする
            $table->primary(['user_id', 'charge_id']);  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_user_charge');
    }
}
