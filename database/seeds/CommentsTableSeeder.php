<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'note_id' => 1,
            'user_id' => 1,
            'text' => 'First comment',
        ]);

        DB::table('comments')->insert([
            'note_id' => 1,
            'user_id' => 1,
            'text' => 'Second comment',
        ]);

        DB::table('comments')->insert([
            'note_id' => 1,
            'user_id' => 2,
            'text' => 'Third comment :(',
        ]);

        DB::table('comments')->insert([
            'note_id' => 1,
            'user_id' => 2,
            'text' => 'Lorem',
        ]);
    }
}
