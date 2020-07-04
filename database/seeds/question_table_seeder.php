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

    for($lv = 1 ;$lv <=3 ;$lv++){
        for ($i = 1; $i <= 20; $i++) {
            DB::table('questions')->insert([
                'title'=>'テスト問題'. $lv.'_'.$i ,
                'lv_lvid'=> $lv,
                'content'=>$i .'と打ち込んで',
                'answer'=> $i,
            ]);
        }
    }
    }
}
