<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

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
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('comments')->insert([
            'note_id' => 1,
            'user_id' => 1,
            'text' => 'Second comment',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('comments')->insert([
            'note_id' => 1,
            'user_id' => 2,
            'text' => 'Third comment :(',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('comments')->insert([
            'note_id' => 1,
            'user_id' => 2,
            'text' => 'Lorem',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
