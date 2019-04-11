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
        $this->call(UsersTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(TeacherTableSeeder::class);
        $this->call(CourseTableSeeder::class);
        $this->call(StudentTableSeeder::class);
        $this->call(AdminTableSeeder::class);
        $this->call(ModuleTableSeeder::class);
        $this->call(CourseStudentTableSeeder::class);
    }
}
