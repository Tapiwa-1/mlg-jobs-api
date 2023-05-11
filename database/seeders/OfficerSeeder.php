<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OfficerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user= User::factory()->create([
            'name' => 'Officer',
            'email' => 'officer@example.com',
        ])->assignRole( 'officer');
        
    }
}
