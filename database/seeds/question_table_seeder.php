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
            'title'=>'テスト問題かんたん1',
            'lv_lvid'=>'1',
            'content'=>'テストと打ち込んで',
            'answer'=> 'テスト',
        ];

        DB::table('questions')->insert($param);

        $param = [
            'title'=>'テスト問題かんたん2',
            'lv_lvid'=>'1',
            'content'=>'Aと打ち込んで',
            'answer'=> 'A',
        ];

        DB::table('questions')->insert($param);

        $param = [
            'title'=>'テスト問題かんたん3',
            'lv_lvid'=>'1',
            'content'=>'Bと打ち込んで',
            'answer'=> 'B',
        ];

        DB::table('questions')->insert($param);





        //難易度2の問題
        $param = [
            'title'=>'テスト問題ふつー1',
            'lv_lvid'=>'2',
            'content'=>'ふつーと打ち込んで',
            'answer'=> 'ふつー',
        ];

        DB::table('questions')->insert($param);

        $param = [
            'title'=>'テスト問題ふつー2',
            'lv_lvid'=>'2',
            'content'=>'AAと打ち込んで',
            'answer'=> 'AA',
        ];

        DB::table('questions')->insert($param);

        $param = [
            'title'=>'テスト問題ふつー3',
            'lv_lvid'=>'2',
            'content'=>'BBと打ち込んで',
            'answer'=> 'BB',
        ];

        DB::table('questions')->insert($param);



        //難易度3の問題
        $param = [
            'title'=>'テスト問題ムズイ1',
            'lv_lvid'=>'3',
            'content'=>'ムズイと打ち込んで',
            'answer'=> 'ムズイ',
        ];

        DB::table('questions')->insert($param);

        $param = [
            'title'=>'テスト問題ムズイ2',
            'lv_lvid'=>'3',
            'content'=>'AAAと打ち込んで',
            'answer'=> 'AAA',
        ];

        DB::table('questions')->insert($param);

        $param = [
            'title'=>'テスト問題ムズイ3',
            'lv_lvid'=>'3',
            'content'=>'BBBと打ち込んで',
            'answer'=> 'BBB',
        ];

        DB::table('questions')->insert($param);

     //難易度3の問題
     $param = [
        'title'=>'テスト問題とてもムズイ1',
        'lv_lvid'=>'4',
        'content'=>'ムズイと打ち込んで',
        'answer'=> 'ムズイ',
    ];

    DB::table('questions')->insert($param);

    $param = [
        'title'=>'テスト問題とてもムズイ2',
        'lv_lvid'=>'4',
        'content'=>'AAAと打ち込んで',
        'answer'=> 'AAA',
    ];

    DB::table('questions')->insert($param);

    $param = [
        'title'=>'テスト問題とてもムズイ3',
        'lv_lvid'=>'4',
        'content'=>'BBBと打ち込んで',
        'answer'=> 'BBB',
    ];

    DB::table('questions')->insert($param);

    }
}
