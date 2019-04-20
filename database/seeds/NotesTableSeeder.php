<?php

use Illuminate\Database\Seeder;

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
        ]);

        DB::table('notes')->insert([
            'user_id' => 1,
            'title' => 'My Second note',
            'description' => 'Description',
        ]);

        DB::table('notes')->insert([
            'user_id' => 1,
            'title' => 'My third note',
            'description' => 'Description',
        ]);
    }
}
