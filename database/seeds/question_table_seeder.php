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
            'content'=>'test2',
            'answer'=> 'CST{1}',
            'url'=> 'Q6ZDUrjmNwb4n8Rg',
        ];

        DB::table('questions')->insert($param);

        $param = [
            'title'=>'2テスト問題',
            'lv_lvid'=>'2',
            'content'=>'test2',
            'answer'=> 'CST{2}',
            'url'=> 'pXxS94WbM4eAc4PM',
            
        ];

        DB::table('questions')->insert($param);

        $param = [
            'title'=>'3.テスト問題',
            'lv_lvid'=>'3',
            'content'=>'',
            'answer'=> 'CST{3}',
            'url'=> 'VKSXcnDBUAa3r8jY',
        ];

        DB::table('questions')->insert($param);

	$param = [
            'title'=>'4.テスト問題',
            'lv_lvid'=>'4',
            'content'=>'test4',
            'answer'=> 'CST{4}',
            'url'=> 'aZPgQnCP4EHWyYuZ',

        ];

        DB::table('questions')->insert($param);

	$param = [
            'title'=>'5.テスト問題',
            'lv_lvid'=>'5',
            'content'=>'test5',
            'answer'=> 'CST{5}',
            'url'=> 'CDZ82JCCf3Xtnb4z',

        ];

        DB::table('questions')->insert($param);

	$param = [
            'title'=>'6. テスト問題',
            'lv_lvid'=>'6',
            'content'=>'test6',
            'answer'=> 'CST{6}',
            'url'=> 'xyZGnw7dZjYYQ7xG',

        ];

        DB::table('questions')->insert($param);

	$param = [
            'title'=>'7.テスト問題',
            'lv_lvid'=>'7',
            'content'=>'test7',
            'answer'=> 'CST{7}',
            'url'=> 'SHz4yazMJmnDYhAj',

        ];

        DB::table('questions')->insert($param);

	$param = [
            'title'=>'8.ファイナル問題',
            'lv_lvid'=>'8',
            'content'=>'test8',
            'answer'=> 'CST{8}',
            'url'=> 'g2mHHWUMSZmdNVJe',

        ];

        DB::table('questions')->insert($param);
    }
}