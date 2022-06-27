<?php

use Illuminate\Database\Seeder;

class highlightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('highlights')->insert([
        'name' => '書く',
        'description' => '計画を書き出すことには、魔法のような力がある。',
    ]);
    DB::table('highlights')->insert([
        'name' => 'デジャブする',
        'description' => '昨日と同じハイライトを設定する。',
    ]);
    }
}
