<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cart;
use App\Models\User;
use App\Models\Product;

class CartSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::factory(5)->create();
        $products = Product::factory(10)->create();

        foreach (range(1, 20) as $i) {
            Cart::create([
                'user_id' => $users->random()->id,
                'product_id' => $products->random()->id,
                'quantity' => rand(1, 5),
                'date_added' => now(),
            ]);
        }
    }
}
