<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class group_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'gname' => '✳︎ナノ✳︎'
        ];
        DB::table('groups')->insert($param);

        $param = [
            'gname' => '四等分のモビルスーツ'
        ];
        DB::table('groups')->insert($param);

        $param = [
            'gname' => 'ピザ'
        ];
        DB::table('groups')->insert($param);
        $param = [
            'gname' => 'STRANGE  DREAM'
        ];
        DB::table('groups')->insert($param);

        $param = [
            'gname' => '狡猾'
        ];
        DB::table('groups')->insert($param);

    }
}
