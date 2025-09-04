<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{


    public function run(): void
    {
        $this->call([ProductsSeeder::class,UserSeeder::class,ReviewsSeeder::class,OrderSeeder::class,CartSeeder::class,]);
    }
}
