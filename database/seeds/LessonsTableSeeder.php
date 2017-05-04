<?php

use Illuminate\Database\Seeder;

class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lessons')->insert([
            'name' => 'Structure',
            'chapter_id' => '1',
        ]);

        DB::table('lessons')->insert([
            'name' => 'Common HTML Elements',
            'chapter_id' => '2',
        ]);

        DB::table('lessons')->insert([
            'name' => 'The CSS Setup',
            'chapter_id' => '3',
        ]);

        DB::table('lessons')->insert([
            'name' => 'Basic CSS Structure & Syntax',
            'chapter_id' => '3',
        ]);

        DB::table('lessons')->insert([
            'name' => 'Colors',
            'chapter_id' => '4',
        ]);

        DB::table('lessons')->insert([
            'name' => 'Fonts',
            'chapter_id' => '4',
        ]);

        DB::table('lessons')->insert([
            'name' => 'Classes, IDs, & Divs',
            'chapter_id' => '5',
        ]);

        DB::table('lessons')->insert([
            'name' => 'Understading the Box Model',
            'chapter_id' => '6',
        ]);

        DB::table('lessons')->insert([
            'name' => 'Borders',
            'chapter_id' => '6',
        ]);

        DB::table('lessons')->insert([
            'name' => 'Content',
            'chapter_id' => '6',
        ]);

        DB::table('lessons')->insert([
            'name' => 'Changing the Box Model',
            'chapter_id' => '6',
        ]);

        DB::table('lessons')->insert([
            'name' => 'Layout',
            'chapter_id' => '7',
        ]);

        DB::table('lessons')->insert([
            'name' => 'Adding Images',
            'chapter_id' => '8',
        ]);

        DB::table('lessons')->insert([
            'name' => 'Tables',
            'chapter_id' => '9',
        ]);
    }
}
