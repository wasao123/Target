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
        'sentence' => '計画を書き出すことには、魔法のような力がある。',
        'full_text' => '書いたことは実現する可能性が高い。ハイライトのための時間を作りたいなら、まずは書いてみるのがいい。ハイライトを書くことを簡単な日課にしよう。これは何時にやってもいいが、夜（寝る前）か朝がやりやすいという人が多い。JZは夜のんびりしながら翌日のハイライトを考えるのが好きだし、ジェイクは朝食から仕事を始めるまでの間にハイライトを選ぶ。では、どこに書くか？選択肢はいろいろある。スマホでリマインドを設定して、毎日、メモアプリに書いてもいいし、その日のイベントとしてカレンダーに書き込んでしまってM、お言い。ノートに走り書きするのでもいい。でも、ハイライトを書き留める方法を１つ選ぶとしたら、僕らは付箋を使う。付箋は手に入れタスク、使い勝手がいいし、バッテリーもソフトウェア更新も不要だ。ラップトップやスマホ、冷蔵庫、デスクなどに貼り付けて、「今日時間を作ってやりたい大事なこと」をいつもさりげなく思い出せるようにしよう。',
    ]);
    DB::table('highlights')->insert([
        'name' => 'デジャブする',
        'sentence' => '昨日と同じハイライトを設定する。',
        'full_text' => '昨日と同じハイライトを設定する',
    ]);
    }
}
