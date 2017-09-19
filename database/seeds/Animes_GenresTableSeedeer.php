<?php

use Illuminate\Database\Seeder;

class Animes_GenresTableSeedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anime_genre')->insert([
            'anime_id' => '1',
            'genre_id' => '1',
        ]);

        DB::table('anime_genre')->insert([
            'anime_id' => '1',
            'genre_id' => '2',
        ]);

        DB::table('anime_genre')->insert([
            'anime_id' => '1',
            'genre_id' => '11',
        ]);

        DB::table('anime_genre')->insert([
            'anime_id' => '1',
            'genre_id' => '20',
        ]);

        DB::table('anime_genre')->insert([
            'anime_id' => '1',
            'genre_id' => '4',
        ]);

        DB::table('anime_genre')->insert([
            'anime_id' => '1',
            'genre_id' => '14',
        ]);

        DB::table('anime_genre')->insert([
            'anime_id' => '1',
            'genre_id' => '16',
        ]);

        DB::table('anime_genre')->insert([
            'anime_id' => '1',
            'genre_id' => '9',
        ]);

        DB::table('anime_genre')->insert([
            'anime_id' => '2',
            'genre_id' => '2',
        ]);

        DB::table('anime_genre')->insert([
            'anime_id' => '2',
            'genre_id' => '3',
        ]);

        DB::table('anime_genre')->insert([
            'anime_id' => '2',
            'genre_id' => '14',
        ]);


    }
}
