<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(lv_table_seeder::class);
        $this->call(user_table_seeder::class);
        $this->call(hints_table_seeder::class);
        $this->call(question_table_seeder::class);
    }
}
