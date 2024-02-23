<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use function Pest\Laravel\call;

use Illuminate\Database\Seeder;
use Database\Seeders\FiliereTableSeeder;
use Database\Seeders\PromotionTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call(PromotionTableSeeder::class);
       $this->call(FiliereTableSeeder::class);
       \App\Models\User::factory(500)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
         
    }
}
