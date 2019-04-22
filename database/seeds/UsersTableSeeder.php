<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'second_user',
            'email' => 'second_user@gmail.com',
            'password' => bcrypt('second_user'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'cstore',
            'email' => 'cstore@cstore.com',
            'password' => bcrypt('cstore'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
