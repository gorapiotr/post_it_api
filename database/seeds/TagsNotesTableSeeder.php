<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

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
            'note_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('tags_notes')->insert([
            'tag_id' => 1,
            'note_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('tags_notes')->insert([
            'tag_id' => 3,
            'note_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('tags_notes')->insert([
            'tag_id' => 4,
            'note_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('tags_notes')->insert([
            'tag_id' => 5,
            'note_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('tags_notes')->insert([
            'tag_id' => 2,
            'note_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('tags_notes')->insert([
            'tag_id' => 2,
            'note_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('tags_notes')->insert([
            'tag_id' => 1,
            'note_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
