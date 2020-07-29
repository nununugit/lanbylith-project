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
        $emails = ['a@a','a@b', 'a@c','a@d','a@e','a@f','a@g'];
        foreach($emails as $email ){
            \App\User::create([
                'name' => 'anuma',
                'email' => $email,
                'password' => bcrypt('password'),
                'group_gid' => $count++
            ]);
        }
    }

}
