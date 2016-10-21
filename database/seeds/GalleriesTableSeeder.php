<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GalleriesTableSeeder extends Seeder {

    private function randDate()
    {
        return Carbon::createFromDate(null, rand(1, 12), rand(1, 28));
    }

    public function run()
    {
        DB::table('galleries')->delete();

        for($i = 0; $i < 2; ++$i)
        {
            $date = $this->randDate();
            DB::table('galleries')->insert([ 
                'created_at' => $date,
                'updated_at' => $date
            ]);

        }
        
    }

}