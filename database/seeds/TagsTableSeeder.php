<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

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
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);

        DB::table('tags')->insert([
            'name' => 'High',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('tags')->insert([
            'name' => 'Sport',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('tags')->insert([
            'name' => 'News',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('tags')->insert([
            'name' => 'Important',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
