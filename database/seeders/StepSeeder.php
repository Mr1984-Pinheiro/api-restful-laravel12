<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Step;

class StepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Step::create([
            'description' => 'Transferido da unidade A para unidade B',            
            'freight_id' => 1
        ]);

        Step::create([
            'description' => 'Transferido da unidade B para unidade C',            
            'freight_id' => 1
        ]);

        Step::create([
            'description' => 'Transferido da unidade C para unidade D',            
            'freight_id' => 2
        ]);
    }
}
