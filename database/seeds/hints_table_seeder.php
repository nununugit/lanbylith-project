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
        '4階の',
        '6階の教室付近',
        '5階の教室付近',
        '6階のエレベーターホール',
        '2階のどこか',
        '4階のエレベーターホール',
        '5階のどこか',
        '宝は全て見つかった！！5400教室に最後の問題があるぞ',

    ];
    foreach($hints as $hint ){
            $param = [
                'hint' => $hint,
            ];
        DB::table('hints')->insert($param);
    }
}
}