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
        '3階のどこかにある気がする！',
        '4階のどこかにあるぞ！',
        '4階のエレベーターホールしかない！',
        '5階の教室付近にありそうだなぁ',
        '5階のいずこかにあるじゃろう',
        '6階の教室付近があやしい',
        '6階のエレベーターホールにただならぬ気配が！',
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