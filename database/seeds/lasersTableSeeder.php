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
        'sentence' => 'スマホからメールなどの無限の泉アプリを消去する',
        'full_text' => 'スマホからメールなどの無限の泉アプリを消去する!!!!!!',
    ]);
    DB::table('lasers')->insert([
        'name' => '「ログアウト」する',
        'sentence' => '使い終えたら、毎回ログアウトする。',
        'full_text' => '使い終えたら、毎回ログアウトする。',
    ]);
     DB::table('lasers')->insert([
        'name' => '「通知」をオフにする',
        'sentence' => '最低限、ほとんどのすべての通知をオフにしてほしい。',
        'full_text' => '最低限、ほとんどのすべての通知をオフにしてほしい。',
    ]);
    }
}

