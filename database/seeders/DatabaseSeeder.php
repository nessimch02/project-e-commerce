<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{


    public function run(): void
    {
        $this->call([ProductsSeeder::class,UserSeeder::class,ReviewsSeeder::class]);
        // Product::factory()->count(100)->create();

        // Product::factory()->create([
        //     'Name' => 'modern sofa',
        //     'Category' => 'living room',
        //     'description' => 'spacious and stylish',
        //     'Price' => 699.99,
        //     'Material' => 'wooden structure',
        //     'Dimansions' => '260x190x85 cm',
        //     'color' => 'dark grey',
        //     'Availability' => 'in stock',
        //     'Shipping' => 'free delivery',
        //     'Reviews' => '4.5',
        // ]);
    }
}
