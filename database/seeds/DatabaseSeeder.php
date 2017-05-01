<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(ChaptersTableSeeder::class);
        $this->call(LessonsTableSeeder::class);
        $this->call(TasksTableSeeder::class);
        $this->call(InstructionsTableSeeder::class);
    }
}

