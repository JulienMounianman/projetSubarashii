<?php

use Faker\Factory as Faker;
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
            'id'    => 1,
            'pseudo' => 'admin',
            'email' => 'admin@example.com',
            'role' => 'admin',
            'password' => bcrypt('123456'),
            'created_at' => '2017-09-17',
            'updated_at' => '2017-09-18',

        ]);

        DB::table('users')->insert([
            'id'    => 2,
            'pseudo' => 'julien',
            'email' => 'julien@example.com',
            'role' => 'user',
            'password' => bcrypt('123456'),
            'created_at' => '2017-09-17',
            'updated_at' => '2017-09-18',

        ]);

        DB::table('users')->insert([
            'id'    => 3,
            'pseudo' => 'Marianne',
            'email' => 'Marianne@example.com',
            'role' => 'user',
            'password' => bcrypt('123456'),
            'created_at' => '2017-09-17',
            'updated_at' => '2017-09-18',

        ]);


        DB::table('users')->insert([
            'id'    => 4,
            'pseudo' => 'Sofiane',
            'email' => 'Sofiane@example.com',
            'role' => 'admin',
            'password' => bcrypt('123456'),
            'created_at' => '2017-09-17',
            'updated_at' => '2017-09-18',

        ]);


        DB::table('users')->insert([
            'id'    => 5,
            'pseudo' => 'Evan',
            'email' => 'evan@example.com',
            'role' => 'user',
            'password' => bcrypt('123456'),
            'created_at' => '2017-09-17',
            'updated_at' => '2017-09-18',

        ]);


    }
}
