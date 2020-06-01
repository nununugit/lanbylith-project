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
            'lvname' => '簡単',
            'score' => '50'
        ];
        DB::table('lv')->insert($param);

        $param = [
            'lvname' => '普通',
            'score' => '100'
        ];
        DB::table('lv')->insert($param);

        $param = [
            'lvname' => '難しい',
            'score' => '150'
        ];
        DB::table('lv')->insert($param);


        $param = [
            'lvname' => 'とても難しい',
            'score' => '200'
        ];
        DB::table('lv')->insert($param);

    }
}
