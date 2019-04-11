<?php

use Illuminate\Database\Seeder;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
            'user_id' => 2,
            'address' => 'dhaka-1215',
            'nid' => '6481648146728947891',
            'image' => 't1.png',
            'skills' => 'php, laravle, react'
        ]);

        DB::table('teachers')->insert([
            'user_id' => 6,
            'address' => 'dhaka-1415',
            'nid' => '234234234234233423',
            'image' => 't2.png',
            'skills' => 'php, laravle, react'
        ]);

        DB::table('teachers')->insert([
            'user_id' => 7,
            'address' => 'dhaka-1235',
            'nid' => '562656544325423523235',
            'image' => 't3.png',
            'skills' => 'php, laravle, react'
        ]);

        DB::table('teachers')->insert([
            'user_id' => 8,
            'address' => 'dhaka-3415',
            'nid' => '456564456454545345',
            'image' => 't4.png',
            'skills' => 'php, laravle, react'
        ]);
    }
}
