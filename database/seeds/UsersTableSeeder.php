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
            'name' => 'trinhphong',
            'email' => 'trinhphong@gmail.com',
            'facebook_id' => '0',
            'password' => bcrypt('123456'),
        ]);
    }
}
