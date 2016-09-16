<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TagTranslationTableSeeder extends Seeder {

    private function randDate()
	{
		return Carbon::createFromDate(null, rand(1, 12), rand(1, 28));
	}

	public function run()
	{
		DB::table('tag_translations')->delete();
		
		for($i = 1; $i < 21; ++$i)
		{
			$date = $this->randDate();
			DB::table('tag_translations')->insert(array(
                    'tag_id' => $i,
					'tag' => 'tag' . $i .' fr',
                    'locale' => 'en',
				));
		}
	}
}