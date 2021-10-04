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
        $count=1;
        $emails = ['a','b', 'c','d','e'];
        foreach($emails as $email ){
            \App\User::create([
                'name' => $email,
                'password' => bcrypt('password'),
            ]);
        }
    }

}
