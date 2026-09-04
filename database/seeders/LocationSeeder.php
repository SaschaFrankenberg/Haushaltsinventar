<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = [
            ['name' => 'Vorratsschrank', 'description' => 'Trockene Lebensmittel'],
            ['name' => 'Küche', 'description' => 'Trockene Lagerung'],
            ['name' => 'Kühlschrank', 'description' => 'Kühlbedürftige Produkte'],
            ['name' => 'Gefrierfach', 'description' => 'Tiefgekühlte Produkte'],
        ];

        foreach ($locations as $location) {
            Location::create($location);
        }
    }
}
