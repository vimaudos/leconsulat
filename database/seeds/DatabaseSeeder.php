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
        $this->call(UserTableSeeder::class);
        $this->call(PostTableSeeder::class);
        $this->call(PostTranslationTableSeeder::class);
        $this->call(TagTableSeeder::class);
        $this->call(TagTranslationTableSeeder::class);
        $this->call(PostTagTableSeeder::class);
        $this->call(SlideTableSeeder::class);
        $this->call(SlideTranslationTableSeeder::class);

    }
}
