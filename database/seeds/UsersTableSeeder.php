<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
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
            'phone' => '032163786378',
            'dob' => Carbon::parse('2000-01-01'),
            'location' => 'dhaka',
            'gander' => 'male',
            'password' => bcrypt('bangladesh'),
            're_password' => bcrypt('bangladesh'),
        ]);

        DB::table('users')->insert([
            'name' => 'Teacher',
            'email' => 't1@techynaf.com',
            'email_verified_at' => new DateTime,
            'phone' => '01654654654',
            'dob' => Carbon::parse('2001-01-01'),
            'location' => 'Raj',
            'gander' => 'male',
            'password' => bcrypt('bangladesh'),
            're_password' => bcrypt('bangladesh'),
        ]);

        DB::table('users')->insert([
            'name' => 'Student',
            'email' => 's1@techynaf.com',
            'email_verified_at' => new DateTime,
            'phone' => '062137862137',
            'dob' => Carbon::parse('2000-11-01'),
            'location' => 'Raj',
            'gander' => 'male',
            'password' => bcrypt('bangladesh'),
            're_password' => bcrypt('bangladesh'),
        ]);

        DB::table('users')->insert([
            'name' => 'Student',
            'email' => 's2@techynaf.com',
            'email_verified_at' => new DateTime,
            'phone' => '018764283324',
            'dob' => Carbon::parse('2000-01-11'),
            'location' => 'dhaka',
            'gander' => 'male',
            'password' => bcrypt('bangladesh'),
            're_password' => bcrypt('bangladesh'),
        ]);
    }
}
