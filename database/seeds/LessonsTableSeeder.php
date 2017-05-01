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
    }
}
