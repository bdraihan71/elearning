<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'a1@techynaf.com',
            'email_verified_at' => new DateTime,
            'password' => bcrypt('bangladesh'),
        ]);

        DB::table('users')->insert([
            'name' => 'Teacher',
            'email' => 't1@techynaf.com',
            'email_verified_at' => new DateTime,
            'password' => bcrypt('bangladesh'),
        ]);

        DB::table('users')->insert([
            'name' => 'Student',
            'email' => 's1@techynaf.com',
            'email_verified_at' => new DateTime,
            'password' => bcrypt('bangladesh'),
        ]);

        DB::table('users')->insert([
            'name' => 'Student',
            'email' => 's2@techynaf.com',
            'email_verified_at' => new DateTime,
            'password' => bcrypt('bangladesh'),
        ]);
    }
}
