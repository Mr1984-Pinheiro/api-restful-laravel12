<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'label' => 'Smartphone',
            'price' => 599.99,
            'description' => 'Latest smartphone with advanced features.',
            'category_id' => 1,
        ]);

        Product::create([
            'label' => 'T-Shirt',
            'price' => 19.99,
            'description' => 'Comfortable cotton t-shirt.',
            'category_id' => 1
        ]);
    }
}
