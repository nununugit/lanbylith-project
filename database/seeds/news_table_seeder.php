<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class news_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1 ;$i <=20 ;$i++){
                DB::table('news')->insert([
                    'title'=>'テストnews'.$i.'番目',
                    'author'=> $i,
                    'date'=>Carbon::now(),
                    'content'=>$i .'のnews',
                ]);
            
        }
    }
}
