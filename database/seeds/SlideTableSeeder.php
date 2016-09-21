<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SlideTableSeeder extends Seeder {

    private function randDate()
    {
        return Carbon::createFromDate(null, rand(1, 12), rand(1, 28));
    }

    public function run()
    {
        DB::table('slides')->delete();

        for($i = 0; $i < 5; ++$i)
        {
            $date = $this->randDate();
            DB::table('slides')->insert([ 
                'image' => 'uploads/cN8ipseLG5.png',
                'created_at' => $date,
                'updated_at' => $date
            ]);

        }
        
    }

}