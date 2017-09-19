<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('posts')->insert([
            'id' => 1,
            'title' => 'Detective Conan sortie de l\'épsidoe 873 aujourd\'hui',
            'content' => 'Je viens de voir l\'épisode 873 sur Adn , il est juste magnifique ,
                   Vous en avez pensez quoi ???? ',
            'category_id' => 1,
            'user_id' => 2,
            'created_at' => '2017-09-18',
            'updated_at' => '2017-09-18',

        ]);

    }
}
