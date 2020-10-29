<?php

use Illuminate\Database\Seeder;

class question_tutorial_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $param = [
            'title'=>'1.練習しよう！',
            'lv_lvid'=>'5',
            'content'=>'「Hello_World!」と入力してみよう。',
            'answer'=> 'CST{Hello_World!}',
        ];

        DB::table('questions')->insert($param);

        $param = [
            'title'=>'2.練習しよう！',
            'lv_lvid'=>'5',
            'content'=>'「Hello_World!」と入力してみよう。',
            'answer'=> 'CST{Hello_World!}',
        ];

        DB::table('questions')->insert($param);
        
        $param = [
            'title'=>'3.練習しよう！',
            'lv_lvid'=>'5',
            'content'=>'「Hello_World!」と入力してみよう。',
            'answer'=> 'CST{Hello_World!}',
        ];

        DB::table('questions')->insert($param);
        
        $param = [
            'title'=>'4.練習しよう！',
            'lv_lvid'=>'5',
            'content'=>'「Hello_World!」と入力してみよう。',
            'answer'=> 'CST{Hello_World!}',
        ];

        DB::table('questions')->insert($param);
    }
}
