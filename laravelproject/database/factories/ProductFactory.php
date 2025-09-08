<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'Name' => $this->faker->words(2, true),
            'Category' => $this->faker->randomElement(['living room', 'bedroom', 'office']),
            'description' => $this->faker->sentence(),
            'Price' => $this->faker->randomFloat(2, 50, 1000),
            'Material' => $this->faker->randomElement(['wood', 'metal', 'plastic', 'wooden structure']),
            'Dimensions' => $this->faker->numberBetween(100, 300) . 'x' .
                            $this->faker->numberBetween(50, 200) . 'x' .
                            $this->faker->numberBetween(50, 100) . ' cm',
            'color' => $this->faker->safeColorName(),
            'Availability' => $this->faker->randomElement(['in stock', 'out of stock']),
            'Shipping' => $this->faker->randomElement(['free delivery', 'paid delivery']),
            'image' => 'pnj/example.jpg',
            'ALT' => $this->faker->sentence(3),
        ];
    }
}
