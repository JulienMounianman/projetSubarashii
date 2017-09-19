<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categories')->insert([
            'name' => 'Critique',
            'description' => 'Ici vous pouvez faire une critique sur un animé',
            'created_at' => '2017-09-18',
            'updated_at' => '2017-09-18',
        ]);

        DB::table('categories')->insert([
            'name' => 'Suggestion',
            'description' => 'Ici vous pouvez faire une suggestion d\'animé',
            'created_at' => '2017-09-18',
            'updated_at' => '2017-09-18',
        ]);

        DB::table('categories')->insert([
            'name' => 'JaponExpo',
            'description' => 'Ici vous pouvez parler de la JaponExpo',
            'created_at' => '2017-09-18',
            'updated_at' => '2017-09-18',
        ]);

        DB::table('categories')->insert([
            'name' => 'Reglement',
            'description' => 'Ici vous pouvez trouver le reglement du Forum',
            'created_at' => '2017-09-18',
            'updated_at' => '2017-09-18',
        ]);
        DB::table('categories')->insert([
            'name' => 'Jeux vidéos',
            'description' => 'Ici vous pouvez parler de jeux vidéos',
            'created_at' => '2017-09-18',
            'updated_at' => '2017-09-18',
        ]);
        DB::table('categories')->insert([
            'name' => 'Musique',
            'description' => 'Ici vous pouvez parler de musique',
            'created_at' => '2017-09-18',
            'updated_at' => '2017-09-18',
        ]);


    }

}
