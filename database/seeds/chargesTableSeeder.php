<?php

use Illuminate\Database\Seeder;

class chargesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
      public function run()
    {
        DB::table('charges')->insert([
        'name' => '毎日運動する（でも頑張りすぎない）',
        'description' => 'ガッツリやるより「小さく続ける」',
    ]);
    DB::table('charges')->insert([
        'name' => '歩きまわる',
        'description' => 'ウォーキングは「奇跡の薬」なのだ。',
    ]);
     DB::table('charges')->insert([
        'name' => '「めんどくさいこと」をする',
        'description' => 'デフォルトを「便利なこと」から「元気が出ること」に変えるだけでいい。',
    ]);
    }
}
