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
            'lvname' => '1',
            'score' => '1'
        ];
        DB::table('lv')->insert($param);

        $param = [
            'lvname' => '2',
            'score' => '2'
        ];
        DB::table('lv')->insert($param);

        $param = [
            'lvname' => '3',
            'score' => '3'
        ];
        DB::table('lv')->insert($param);

        $param = [
            'lvname' => '4',
            'score' => '4'
        ];
        DB::table('lv')->insert($param);

        $param = [
            'lvname' => '5',
            'score' => '5'
        ];
        DB::table('lv')->insert($param);
        
        $param = [
            'lvname' => '6',
            'score' => '6'
        ];
        DB::table('lv')->insert($param);
        
        $param = [
            'lvname' => '7',
            'score' => '7'
        ];
        DB::table('lv')->insert($param);
        

        $param = [
            'lvname' => 'final',
            'score' => '100'
        ];
        DB::table('lv')->insert($param);
    }
}
