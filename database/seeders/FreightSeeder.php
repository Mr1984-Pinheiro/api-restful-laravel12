<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Freight;

class FreightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Freight::create([
            'origin' => 'São Paulo',
             'destination' => 'Rio de Janeiro',
             'tracking_code' => 'SP-RJ-001',
             'status' => 'In transit',
             'sender_id' => 1,
             'recipient_id' => 2,
        ]);

        Freight::create([
            'origin' => 'Rio de Janeiro',    
             'destination' => 'São Paulo',
             'tracking_code' => 'RJ-SP-001',
             'status' => 'Delivered',
             'sender_id' => 2,
             'recipient_id' => 1
        ]);

        Freight::create([
            'origin' => 'Rio de Janeiro',    
             'destination' => 'Casa Man',
             'tracking_code' => '1234567',
             'status' => 'Out for delivery',
             'sender_id' => 2,
             'recipient_id' => 1
        ]);
    }
}
