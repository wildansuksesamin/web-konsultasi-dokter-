<?php

namespace Database\Seeders;

use App\Models\konsultasi;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SimulationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        // User seeder
        

        for ($i = 0; $i < 10; $i++) {
            konsultasis::create([
                'name' => 'Team ' . $faker->firstName(),
                'description' => $faker->realText($maxNbChars = 100, $indexSize = 2),
                'status' => 'nonaktif',
            ]);
        }
    }
}
