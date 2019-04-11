<?php

use Illuminate\Database\Seeder;

class CourseStudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course_student')->insert([
            'student_id' => 1,
            'course_id' => 1,
        ]);

        DB::table('course_student')->insert([
            'student_id' => 1,
            'course_id' => 2,
        ]);

        DB::table('course_student')->insert([
            'student_id' => 2,
            'course_id' => 2,
        ]);

        DB::table('course_student')->insert([
            'student_id' => 3,
            'course_id' => 1,
        ]);
    }
}
