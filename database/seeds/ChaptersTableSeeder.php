<?php

use Illuminate\Database\Seeder;

class ChaptersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chapters')->insert([
            'name' => 'HTML Fundamentals',
            'course_id' => '1',
        ]);

        DB::table('chapters')->insert([
            'name' => 'HTML Content',
            'course_id' => '1',
        ]);
    }
}
