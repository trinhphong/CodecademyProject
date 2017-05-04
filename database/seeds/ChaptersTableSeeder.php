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

        DB::table('chapters')->insert([
            'name' => 'CSS Fundamentals',
            'course_id' => '1',
        ]);

        DB::table('chapters')->insert([
            'name' => 'Styling with CSS',
            'course_id' => '1',
        ]);

        DB::table('chapters')->insert([
            'name' => 'Organizing HTML & CSS',
            'course_id' => '1',
        ]);

        DB::table('chapters')->insert([
            'name' => 'The CSS Box Model',
            'course_id' => '1',
        ]);

        DB::table('chapters')->insert([
            'name' => 'CSS Positioning',
            'course_id' => '1',
        ]);

        DB::table('chapters')->insert([
            'name' => 'Images',
            'course_id' => '1',
        ]);

        DB::table('chapters')->insert([
            'name' => 'HTML Tables',
            'course_id' => '1',
        ]);
    }
}
