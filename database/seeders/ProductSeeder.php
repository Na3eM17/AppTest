<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {

        Product::factory()->count(20)->create();

        User::all()->each(function ($user) {
            $randomProducts = Product::inRandomOrder()->take(3)->get();

            foreach ($randomProducts as $product) {
                $product->update(['user_id' => $user->id]);
            }
        });
    }
}
