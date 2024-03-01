<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Generate 100 clients
        for ($i = 0; $i < 1000; $i++) {
            Client::create([
                'num_client' => Str::random(5), // Generate a random 5-character alphanumeric client number
                'nom' => $faker->lastName // Generate a fake last name
            ]);
        }
    }
}
