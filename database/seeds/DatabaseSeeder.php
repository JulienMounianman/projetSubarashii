<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         $this->call(UsersTableSeeder::class);
         $this->call(AnimesTableSeeder::class);
         $this->call(GenresTableSeedeer::class);
         $this->call(CategoriesTableSeeder::class);
         $this->call(PostsTableSeeder::class);
         $this->call(CommentsTableSeedeer::class);
         $this->call(Animes_GenresTableSeedeer::class);
    }
}
