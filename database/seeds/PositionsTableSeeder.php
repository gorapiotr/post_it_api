<?php

use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert([
            'note_id' => 1,
            'text' => 'Lorem ipsum vulputate scelerisque mattis fames.',
            'done' => true
        ]);

        DB::table('positions')->insert([
            'note_id' => 1,
            'text' => 'Lorem ipsum luctus torquent consectetur felis augue.',
            'done' => false
        ]);

        DB::table('positions')->insert([
            'note_id' => 2,
            'text' => 'Lorem ipsum lacinia ipsum et curabitur, nam porta ornare arcu platea, dictum vivamus quisque tempus.',
            'done' => true
        ]);

        DB::table('positions')->insert([
            'note_id' => 3,
            'text' => 'Lorem ipsum eu.',
            'done' => false
        ]);
    }
}
