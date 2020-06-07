<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class user_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $param = [
            'name'=>'anuma',

            'email'=>'a@a',
            'password'=>'anuma',
            'group_gid'=>'1'
        ];

        DB::table('users')->insert($param);

    }
}
