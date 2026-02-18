<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
            
        return [
            'Pname' => $this->faker->randomElement([
            'Salt', 'Sugar', 'Mobile', 'Laptop', 'Keyboard', 
            'Mouse', 'Monitor', 'Tablet', 'Headphones', 'Camera',
            'Bottle', 'Chair', 'Table', 'Pen', 'Notebook',
            'Watch', 'Backpack', 'Shoes', 'Glasses', 'Speaker'
        ]),
            'produseDate' => fake()->dateTimeBetween('-1 year', 'now'),
            'expirDate' => fake()->dateTimeBetween('now', '+1 year'),
            'user_id' => User::factory(),
        ];


    }
}
