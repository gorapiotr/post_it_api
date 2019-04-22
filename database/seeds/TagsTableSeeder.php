<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'name' => 'Normal',
        ]);

        DB::table('tags')->insert([
            'name' => 'High',
        ]);

        DB::table('tags')->insert([
            'name' => 'Sport',
        ]);

        DB::table('tags')->insert([
            'name' => 'News',
        ]);

        DB::table('tags')->insert([
            'name' => 'Important',
        ]);
    }
}
