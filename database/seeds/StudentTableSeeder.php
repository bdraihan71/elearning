<?php

use Illuminate\Database\Seeder;
use Symfony\Component\Console\Helper\Table;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('students')->insert([
            'user_id' => 3,
            'image' => 'student1.png'
        ]);

        DB::Table('students')->insert([
            'user_id' => 4,
            'image' => 'student2.png'
        ]);
    }
}
