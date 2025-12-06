<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create([
            'name' => 'João Silva',
            'phone' => '11987654321',
        ]);

        Customer::create([
            'name' => 'Maria Oliveira',
            'phone' => '21987654321',
        ]);
    }
}
