<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'name' => 'basic php for beginners',
            'image' => 'course1.png',
            'teacher_id' => 2,
        ]);

        DB::table('courses')->insert([
            'name' => 'basic larave for beginners',
            'image' => 'course2.png',
            'teacher_id' => 2,
        ]);

        DB::table('courses')->insert([
            'name' => 'basic php reactjs for beginners',
            'image' => 'course3.png',
            'teacher_id' => 2,
        ]);
    }
}
