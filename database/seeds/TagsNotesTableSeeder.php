<?php

use Illuminate\Database\Seeder;

class TagsNotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags_notes')->insert([
            'tag_id' => 1,
            'note_id' => 1
        ]);

        DB::table('tags_notes')->insert([
            'tag_id' => 1,
            'note_id' => 2
        ]);

        DB::table('tags_notes')->insert([
            'tag_id' => 3,
            'note_id' => 1
        ]);

        DB::table('tags_notes')->insert([
            'tag_id' => 4,
            'note_id' => 1
        ]);

        DB::table('tags_notes')->insert([
            'tag_id' => 5,
            'note_id' => 1
        ]);

        DB::table('tags_notes')->insert([
            'tag_id' => 2,
            'note_id' => 1
        ]);

        DB::table('tags_notes')->insert([
            'tag_id' => 2,
            'note_id' => 2
        ]);

        DB::table('tags_notes')->insert([
            'tag_id' => 1,
            'note_id' => 3
        ]);
    }
}
