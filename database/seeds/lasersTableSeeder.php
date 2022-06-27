<?php

use Illuminate\Database\Seeder;

class lasersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
        DB::table('lasers')->insert([
        'name' => '「気が散らないスマホ」を試す',
        'description' => 'スマホからメールなどの無限の泉アプリを消去する',
    ]);
    DB::table('lasers')->insert([
        'name' => '「ログアウト」する',
        'description' => '使い終えたら、毎回ログアウトする。',
    ]);
     DB::table('lasers')->insert([
        'name' => '「通知」をオフにする',
        'description' => '最低限、ほとんどのすべての通知をオフにしてほしい。',
    ]);
    }
}

