<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('admins')->insert([
            'user_id' => 1,
            'image' => 'admin1.png'
        ]);
    }
}
