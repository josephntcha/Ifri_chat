<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PromotionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("promotions")->insert([
            ["annee"=>"2015-2016"],
            ["annee"=>"2016-2017"],
            ["annee"=>"2017-2018"],
           
        ]);
    }
}
