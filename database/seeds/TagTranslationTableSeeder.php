<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TagTranslationTableSeeder extends Seeder {

    
	public function run()
	{
		DB::table('tag_translations')->delete();
		
		//FR
        for($i = 1; $i < 21; ++$i)
		{
			DB::table('tag_translations')->insert(array(
                    'tag_id' => $i,
					'tag' => 'tag ' . $i .' FR',
                    'tag_url' => 'tag-'.$i.'-fr',
                    'locale' => 'fr',
				));
		}
        
        //EN
        for($i = 1; $i < 21; ++$i)
		{
			DB::table('tag_translations')->insert(array(
                    'tag_id' => $i,
					'tag' => 'tag ' . $i .' EN',
                    'tag_url' => 'tag-'.$i.'-en',
                    'locale' => 'en',
				));
		}
        
        //ES
        for($i = 1; $i < 21; ++$i)
		{
			DB::table('tag_translations')->insert(array(
                    'tag_id' => $i,
					'tag' => 'tag ' . $i .' ES',
                    'tag_url' => 'tag-'.$i.'-es',
                    'locale' => 'es',
				));
		}
        
        //PT
        for($i = 1; $i < 21; ++$i)
		{
			DB::table('tag_translations')->insert(array(
                    'tag_id' => $i,
					'tag' => 'tag ' . $i .' PT',
                    'tag_url' => 'tag-'.$i.'-pt',
                    'locale' => 'pt',
				));
		}
        
        //DE
        for($i = 1; $i < 21; ++$i)
		{
			DB::table('tag_translations')->insert(array(
                    'tag_id' => $i,
					'tag' => 'tag ' . $i .' DE',
                    'tag_url' => 'tag-'.$i.'-de',
                    'locale' => 'de',
				));
		}
        
        //IT
        for($i = 1; $i < 21; ++$i)
		{
			DB::table('tag_translations')->insert(array(
                    'tag_id' => $i,
					'tag' => 'tag ' . $i .' IT',
                    'tag_url' => 'tag-'.$i.'-it',
                    'locale' => 'it',
				));
		}
	}
}