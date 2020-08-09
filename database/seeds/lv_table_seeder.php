<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class lv_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {


        $param = [
            'lvname' => 'easy',
            'score' => '1'
        ];
        DB::table('lv')->insert($param);

        $param = [
            'lvname' => 'normal',
            'score' => '2'
        ];
        DB::table('lv')->insert($param);

        $param = [
            'lvname' => 'hard',
            'score' => '3'
        ];
        DB::table('lv')->insert($param);



    }
}
