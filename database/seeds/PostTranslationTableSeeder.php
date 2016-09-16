<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PostTranslationTableSeeder extends Seeder {

    public function run()
    {

        //DB::table('post_translations')->delete();
        
        
        for($i = 1; $i < 101; ++$i)
        {

            DB::table('post_translations')->insert([
                'post_id' => $i,
                'titre' => 'Titre ' . $i.' En',
                'contenu' => 'Contenu ' . $i . ' En Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'locale' => 'en',

            ]);
            
        }

    }

}