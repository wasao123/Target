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
        'sentence' => 'ガッツリやるより「小さく続ける」',
        'full_text' => 'ガッツリやるより「小さく続ける」!!!!!!',
    ]);
    DB::table('charges')->insert([
        'name' => '歩きまわる',
        'sentence' => 'ウォーキングは「奇跡の薬」なのだ。',
        'full_text' => 'ウォーキングは「奇跡の薬」なのだ。',
    ]);
     DB::table('charges')->insert([
        'name' => '「めんどくさいこと」をする',
        'sentence' => 'デフォルトを「便利なこと」から「元気が出ること」に変えるだけでいい。',
        'full_text' => 'デフォルトを「便利なこと」から「元気が出ること」に変えるだけでいい。',
    ]);
    }
}
