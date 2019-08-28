<?php

use Illuminate\Database\Seeder;

class CatalogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catalogs')->insert([
            ['name' => 'news'],
            ['name' => 'event'],
            ['name' => 'commended'],
            ['name' => 'punish']
    	]);
    }
}
