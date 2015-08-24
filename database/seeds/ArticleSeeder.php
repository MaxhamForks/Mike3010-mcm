<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{

   public function run()
   {
      DB::table('article')->delete();

      Article::create([]);
   }

}
