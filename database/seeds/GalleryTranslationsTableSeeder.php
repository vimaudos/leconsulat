<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GalleryTranslationsTableSeeder extends Seeder {

    
	public function run()
	{
		DB::table('gallery_translations')->delete();
		
		//FR
        for($i = 1; $i < 3; ++$i)
		{
			DB::table('gallery_translations')->insert(array(
                    'gallery_id' => $i,
					'nom_gallery' => 'Galerie ' . $i .' FR',
                    'locale' => 'fr',
				));
		}
        
        //EN
        for($i = 1; $i < 3; ++$i)
		{
			DB::table('gallery_translations')->insert(array(
                    'gallery_id' => $i,
					'nom_gallery' => 'Galerie ' . $i .' EN',
                    'locale' => 'en',
				));
		}
        
        //ES
        for($i = 1; $i < 3; ++$i)
		{
			DB::table('gallery_translations')->insert(array(
                    'gallery_id' => $i,
					'nom_gallery' => 'Galerie ' . $i .' ES',
                    'locale' => 'es',
				));
		}
        
        //PT
        for($i = 1; $i < 3; ++$i)
		{
			DB::table('gallery_translations')->insert(array(
                    'gallery_id' => $i,
					'nom_gallery' => 'Galerie ' . $i .' PT',
                    'locale' => 'pt',
				));
		}
        
        //DE
        for($i = 1; $i < 3; ++$i)
		{
			DB::table('gallery_translations')->insert(array(
                    'gallery_id' => $i,
					'nom_gallery' => 'Galerie ' . $i .' DE',
                    'locale' => 'de',
				));
		}
        
        //IT
        for($i = 1; $i < 3; ++$i)
		{
			DB::table('gallery_translations')->insert(array(
                    'gallery_id' => $i,
					'nom_gallery' => 'Galerie ' . $i .' IT',
                    'locale' => 'it',
				));
		}
	}
}

