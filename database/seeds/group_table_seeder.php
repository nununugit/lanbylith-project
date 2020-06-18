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
            'gname' => 'Ateam'
        ];
        DB::table('groups')->insert($param);

        $param = [
            'gname' => 'Bteam'
        ];
        DB::table('groups')->insert($param);

        $param = [
            'gname' => 'Cteam'
        ];
        DB::table('groups')->insert($param);
        $param = [
            'gname' => 'Dteam'
        ];
        DB::table('groups')->insert($param);

        $param = [
            'gname' => 'Eteam'
        ];
        DB::table('groups')->insert($param);

        $param = [
            'gname' => 'Fteam'
        ];
        DB::table('groups')->insert($param);

        $param = [
            'gname' => 'Gteam'
        ];
        DB::table('groups')->insert($param);

    }
}
