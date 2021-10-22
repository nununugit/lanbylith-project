<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class question_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           //難易度1の問題
           $param = [
            'title'=>'1テスト問題',
            'lv_lvid'=>'1',
            'content'=>'「Hello_World!」と入力してみよう。',
            'answer'=> 'CST{Hello_World!}',
        ];

        DB::table('questions')->insert($param);

        $param = [
            'title'=>'2テスト問題',
            'lv_lvid'=>'2',
            'content'=>'講義の中で主に使用したOSを以下の選択肢から1つ選び、番号で答えよ。
								1.MacOS
								2.Windows
								3.UNIX
								4.Linux',
            'answer'=> 'CST{3}',
        ];

        DB::table('questions')->insert($param);

        $param = [
            'title'=>'3.テスト問題',
            'lv_lvid'=>'3',
            'content'=>'以下の文章の空欄に当てはまる言葉をカタカナで答えよ。なお、二つの空欄には同じ言葉が入る。
			「同時に複数のユーザが利用できることを「　　　ユーザ」、同時に複数の処理ができることを「　　　タスク」という。」',
            'answer'=> 'CST{マルチ}',
        ];

        DB::table('questions')->insert($param);

	$param = [
            'title'=>'4.テスト問題',
            'lv_lvid'=>'4',
            'content'=>'ログアウトする際に使用するコマンドを小文字のアルファベットで答えよ。',
            'answer'=> 'CST{exit}',
        ];

        DB::table('questions')->insert($param);

	$param = [
            'title'=>'5.テスト問題',
            'lv_lvid'=>'5',
            'content'=>'ユーザにログインする際には、ユーザ名とパスワードを打ち込む。しかし、何を打ち込んでも画面には表示されなかった。これはなぜか。以下の選択肢からどちらかを選び、番号で答えよ。
								1.打ち込む際に他人にパスワードを見られないようにするため
								2.タイピング能力の向上を図るため',
            'answer'=> 'CST{1}',
        ];

        DB::table('questions')->insert($param);

	$param = [
            'title'=>'6. テスト問題',
            'lv_lvid'=>'6',
            'content'=>'ファイルを編集するコマンドを以下の選択肢から選んで番号で答えよ。 
                        1. comコマンド 
                        2. nanoコマンド 
                        3. editコマンド 
                        4. nonaコマンド ',
            'answer'=> 'CST{2}',
        ];

        DB::table('questions')->insert($param);

	$param = [
            'title'=>'7.テスト問題',
            'lv_lvid'=>'7',
            'content'=>'「1lkpq@4a3Z」というパスワードが解読されるまでの時間に最も近いと予想できる時間を以下の選択肢から1つ選び、番号で答えよ。
			            1. 60年
			            2. 6年
			            3. 6ヶ月
			            4. 6週間
			            5. 6日',
            'answer'=> 'CST{2}',
        ];

        DB::table('questions')->insert($param);

	$param = [
            'title'=>'8.ファイナル問題',
            'lv_lvid'=>'8',
            'content'=>'パスワードを変更するコマンドを小文字のアルファベットで答えよ。',
            'answer'=> 'CST{passwd}',
        ];

        DB::table('questions')->insert($param);
    }
}