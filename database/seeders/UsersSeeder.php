<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(7)->create([
            // 'name' => 'Test User',
            // 'email' => 'test@example.com',
          'birthday' => Carbon::now()->subYears(20)->format('Y-m-d')
        ]);
    }
}
