<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Flight::factory(5)->create();

        \App\Models\Flight::factory()->create([
            'name' => 'Voyage 1',
        ]);
    }
}
