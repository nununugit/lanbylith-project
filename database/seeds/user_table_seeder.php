<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
class user_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'anuma7',
            'email' => 'a@a',
            'password' => bcrypt('password'),
            'group_gid' => '1'
        ]);
    }

}
