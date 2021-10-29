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
            'title'=>'1 なぞなぞ',
            'lv_lvid'=>'1',
            'content'=>'これはなんだ？',
            'answer'=> 'かずのこ',
            'url'=> 'CDZ82JCCf3Xtnb4z',
            'filename' => 'question1.jpg'

        ];

        DB::table('questions')->insert($param);

        $param = [
            'title'=>'2 ポリビュオス暗号',
            'lv_lvid'=>'2',
            'content'=>'以下の暗号文を解け！',
            'answer'=> 'うらないし',
            'url'=> 'pXxS94WbM4eAc4PM',
            'filename' => 'question2.png'
        ];

        DB::table('questions')->insert($param);

        $param = [
            'title'=>'3 ルーレット',
            'lv_lvid'=>'3',
            'content'=>'0を出そう！！',
            'answer'=> 'ごまだれ',
            'url'=> 'VKSXcnDBUAa3r8jY',
            'filename' => ''
        ];

        DB::table('questions')->insert($param);

	$param = [
            'title'=>'4 スライドパズル',
            'lv_lvid'=>'4',
            'content'=>'スライドパズルを解こう',
            'answer'=> 'うどん',
            'url'=> 'aZPgQnCP4EHWyYuZ',
            'filename' => ''

        ];

        DB::table('questions')->insert($param);

	$param = [

        'title'=>'5 シーザ暗号',
        'lv_lvid'=>'5',
        'content'=>'以下の暗号文を解け！',
        'answer'=> 'おおいまち',
        'url'=> 'Q6ZDUrjmNwb4n8Rg',
        'filename' => 'question5.png'
        ];

        DB::table('questions')->insert($param);

	$param = [
            'title'=>'6 コード暗号',
            'lv_lvid'=>'6',
            'content'=>'以下の暗号文を解け！',
            'answer'=> 'りんご',
            'url'=> 'xyZGnw7dZjYYQ7xG',
            'filename' => 'question6.png'
        ];

        DB::table('questions')->insert($param);

	$param = [
            'title'=>'7 アナグラム',
            'lv_lvid'=>'7',
            'content'=>'以下の暗号文を解け！',
            'answer'=> 'ゆきだるま',
            'url'=> 'SHz4yazMJmnDYhAj',
            'filename' => 'question7.png'
        ];

        DB::table('questions')->insert($param);

	$param = [
            'title'=>'8 クロスワード',
            'lv_lvid'=>'8',
            'content'=>'今までの答えを全て合わせよう！！クロスワードになっているぞ',
            'answer'=> 'おうごんのりゅう',
            'url'=> 'g2mHHWUMSZmdNVJe',
            'filename' => 'question8.png'
        ];

        DB::table('questions')->insert($param);
    }
}