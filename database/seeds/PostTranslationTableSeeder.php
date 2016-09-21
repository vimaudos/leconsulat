<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PostTranslationTableSeeder extends Seeder {

    public function run()
    {

        //DB::table('post_translations')->delete();
        
        //FRANCAIS
        for($i = 1; $i < 101; ++$i)
        {

            DB::table('post_translations')->insert([
                'post_id' => $i,
                'titre' => 'Titre ' . $i.' FR',
                'contenu' => 'Contenu ' . $i . ' FR Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'locale' => 'fr',

            ]);
            
        }
        
        //ANGLAIS
        for($j = 1; $j < 101; ++$j)
        {

            DB::table('post_translations')->insert([
                'post_id' => $j,
                'titre' => 'Titre ' . $j.' En',
                'contenu' => 'Contenu ' . $j . ' En Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'locale' => 'en',

            ]);
            
        }
        
        //ESPAGNOL
        for($k = 1; $k < 101; ++$k)
        {

            DB::table('post_translations')->insert([
                'post_id' => $k,
                'titre' => 'Titre ' . $k.' ES',
                'contenu' => 'Contenu ' . $k . ' ES Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'locale' => 'es',

            ]);
            
        }
        
        //PORTUGAIS
        for($l = 1; $l < 101; ++$l)
        {

            DB::table('post_translations')->insert([
                'post_id' => $l,
                'titre' => 'Titre ' . $l.' PT',
                'contenu' => 'Contenu ' . $l . ' PT Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'locale' => 'pt',

            ]);
            
        }
        
        //ALLEMAND
        for($m = 1; $m < 101; ++$m)
        {

            DB::table('post_translations')->insert([
                'post_id' => $m,
                'titre' => 'Titre ' . $m.' DE',
                'contenu' => 'Contenu ' . $m . ' DE Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'locale' => 'de',

            ]);
            
        }
        
        //ITALIEN
        for($n = 1; $n < 101; ++$n)
        {

            DB::table('post_translations')->insert([
                'post_id' => $n,
                'titre' => 'Titre ' . $n.' IT',
                'contenu' => 'Contenu ' . $n . ' IT Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'locale' => 'it',

            ]);
            
        }

    }

}