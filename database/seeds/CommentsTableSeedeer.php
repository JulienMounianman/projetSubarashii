<?php

use Illuminate\Database\Seeder;

class CommentsTableSeedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('comments')->insert([
            'content' =>
                'J\'ai trouvée le début un peux long (je ne c plus pour quoi) mais très franchement cette 
                anime est génial et il est magnifique (de mon point de vue)!!!',
            'user_id' => 2,
            'post_id' => 1,
            'created_at' => '2017-09-18',
            'updated_at' => '2017-09-18',
        ]);

        DB::table('comments')->insert([
            'content' =>
                'Au début je me disais non c\'est pourri à cause du héros moche mais finalement il est 
                génial je mais un 9/10 il aurai eu un 10 si le héros n\'était pas une victime',
            'user_id' => 3,
            'post_id' => 1,
            'created_at' => '2017-09-18',
            'updated_at' => '2017-09-18',
        ]);

        DB::table('comments')->insert([
            'content' =>
                'OMG! Cet anime est juste magnifique, même je suis pas vraiment satisfaite de cette fin.',
            'user_id' => 4,
            'post_id' => 1,
            'created_at' => '2017-09-18',
            'updated_at' => '2017-09-18',
        ]);

    }




}
