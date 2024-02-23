<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FiliereTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("filieres")->insert([
            ['filiere' => 'GL'],
            ['filiere' => 'SI'],
            ['filiere' => 'IM'],
           
        ]);
    }
}
