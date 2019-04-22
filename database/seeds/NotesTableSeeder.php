<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notes')->insert([
            'user_id' => 1,
            'title' => 'My first note',
            'description' => 'Description',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('notes')->insert([
            'user_id' => 1,
            'title' => 'My Second note',
            'description' => 'Description',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('notes')->insert([
            'user_id' => 1,
            'title' => 'My third note',
            'description' => 'Description',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
