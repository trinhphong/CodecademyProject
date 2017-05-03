<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'role' => 'Admin',
        ]);

        DB::table('admins')->insert([
            'name' => 'super admin',
            'email' => 'super@gmail.com',
            'password' => bcrypt('123456'),
            'role' => 'Super Admin',
        ]);
    }
}
