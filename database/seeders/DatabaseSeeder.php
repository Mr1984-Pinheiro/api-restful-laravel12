<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\BannersSeeder;
use Database\Seeders\UsersSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\ProductImageSeeder;
use Database\Seeders\CustomersSeeder;
use Database\Seeders\Freight;
use Database\Seeders\StepSeeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsersSeeder::class,
            BannersSeeder::class,
            //CategorySeeder::class,
            ProductSeeder::class,
            ProductImageSeeder::class,
            CustomersSeeder::class,
            Freights::class,
            StepSeeder::class
        ]);
    }
}
