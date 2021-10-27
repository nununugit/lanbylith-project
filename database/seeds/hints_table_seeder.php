<?php

use Illuminate\Database\Seeder;

class hints_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    $hints =[
        'hint1',
        'hint2',
        'hint3',
        'hint4',
        'hint5',
        'hint6',
        'hint7',
        'hint8',
    ];
    foreach($hints as $hint ){
            $param = [
                'hint' => $hint,
            ];
        DB::table('hints')->insert($param);
    }
}
}