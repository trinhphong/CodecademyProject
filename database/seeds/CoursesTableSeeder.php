<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'name' => 'Learn HTML & CSS',
            'overview' => 'HTML is the the foundation behind all web pages. It\'s used to add structure and form to text, images, and more. CSS is the language used to style HTML content. In this first course, you\'ll learn the fundamentals of both languages so that you can create visually appealing web pages.',
            'language' => 'HTML/CSS',
        ]);
    }
}
