<?php

use Illuminate\Database\Seeder;

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
        ]);

        DB::table('users')->insert([
            'name' => 'second_user',
            'email' => 'second_user@gmail.com',
            'password' => bcrypt('second_user'),
        ]);

        DB::table('users')->insert([
            'name' => 'cstore',
            'email' => 'cstore@cstore.com',
            'password' => bcrypt('cstore'),
        ]);
    }
}
