<?php

use Illuminate\Database\Seeder;

class GenresTableSeedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('genres')->insert([
            'name' => 'Action',
        ]);

        DB::table('genres')->insert([
            'name' => 'Combat',
        ]);

        DB::table('genres')->insert([
            'name' => 'Cyber & Mecha',
        ]);

        DB::table('genres')->insert([
            'name' => 'Ecchi',
        ]);

        DB::table('genres')->insert([
            'name' => 'Epique & Héroique',
        ]);

        DB::table('genres')->insert([
            'name' => 'Fantastique & Mythe',
        ]);

        DB::table('genres')->insert([
            'name' => 'Harem',
        ]);

        DB::table('genres')->insert([
            'name' => 'Musical',
        ]);

        DB::table('genres')->insert([
            'name' => 'Romance',
        ]);

        DB::table('genres')->insert([
            'name' => 'Amour & Amitié',
        ]);

        DB::table('genres')->insert([
            'name' => 'Comédie',
        ]);

        DB::table('genres')->insert([
            'name' => 'Fantasy',
        ]);

        DB::table('genres')->insert([
            'name' => 'Educatif',
        ]);

        DB::table('genres')->insert([
            'name' => 'Espace & Sci-Fiction',
        ]);

        DB::table('genres')->insert([
            'name' => 'Historique',
        ]);

        DB::table('genres')->insert([
            'name' => 'School Life',
        ]);

        DB::table('genres')->insert([
            'name' => 'Sport',
        ]);

        DB::table('genres')->insert([
            'name' => 'Aventure',
        ]);

        DB::table('genres')->insert([
            'name' => 'Contes & Récits',
        ]);

        DB::table('genres')->insert([
            'name' => 'Drame',
        ]);

        DB::table('genres')->insert([
            'name' => 'Enigme & Policier',
        ]);

        DB::table('genres')->insert([
            'name' => 'Familial & Jeunesse',
        ]);

        DB::table('genres')->insert([
            'name' => 'Gastronomie',
        ]);

        DB::table('genres')->insert([
            'name' => 'Horreur',
        ]);

        DB::table('genres')->insert([
            'name' => 'Magical Girl',
        ]);

        DB::table('genres')->insert([
            'name' => 'Psychologie',
        ]);

        DB::table('genres')->insert([
            'name' => 'Surnaturel',
        ]);

        DB::table('genres')->insert([
            'name' => 'Tranche de vie',
        ]);


    }
}
