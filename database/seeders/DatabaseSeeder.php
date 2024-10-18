<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'profile' => 'https://randomuser.me/api/portraits/med/men/75.jpg'
        ]);
        User::factory()->create([
            'name' => 'jonh',
            'email' => 'jonh@example.com',
            'profile' => 'https://randomuser.me/api/portraits/med/men/15.jpg'
        ]);
        User::factory()->create([
            'name' => 'smitt',
            'email' => 'smitt@example.com',
            'profile' => 'https://randomuser.me/api/portraits/med/men/23.jpg'
        ]);

        // create products

        Product::factory(5)->create();

    }
}
