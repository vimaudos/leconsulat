<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SlideTranslationTableSeeder extends Seeder {

    
	public function run()
	{
		DB::table('slide_translations')->delete();
		
		//FR
        for($i = 1; $i < 6; ++$i)
		{
			DB::table('slide_translations')->insert(array(
                    'slide_id' => $i,
					'titre' => 'slide ' . $i .' FR',
                    'locale' => 'fr',
				));
		}
        
        //EN
        for($i = 1; $i < 6; ++$i)
		{
			DB::table('slide_translations')->insert(array(
                    'slide_id' => $i,
					'titre' => 'slide ' . $i .' EN',
                    'locale' => 'en',
				));
		}
        
        //ES
        for($i = 1; $i < 6; ++$i)
		{
			DB::table('slide_translations')->insert(array(
                    'slide_id' => $i,
					'titre' => 'slide ' . $i .' ES',
                    'locale' => 'es',
				));
		}
        
        //PT
        for($i = 1; $i < 6; ++$i)
		{
			DB::table('slide_translations')->insert(array(
                    'slide_id' => $i,
					'titre' => 'slide ' . $i .' PT',
                    'locale' => 'pt',
				));
		}
        
        //DE
        for($i = 1; $i < 6; ++$i)
		{
			DB::table('slide_translations')->insert(array(
                    'slide_id' => $i,
					'titre' => 'slide ' . $i .' DE',
                    'locale' => 'de',
				));
		}
        
        //IT
        for($i = 1; $i < 6; ++$i)
		{
			DB::table('slide_translations')->insert(array(
                    'slide_id' => $i,
					'titre' => 'slide ' . $i .' IT',
                    'locale' => 'it',
				));
		}
	}
}

