<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Konserven', 'description' => 'Haltbare Lebensmittel'],
            ['name' => 'Getränke', 'description' => 'Alle Arten von Getränken'],
            ['name' => 'Molkereiprodukte', 'description' => 'Kühlbedürftige Produkte'],
            ['name' => 'Tiefkühl', 'description' => 'Tiefgekühlte Produkte'],
            ['name' => 'Obst & Gemüse', 'description' => 'Frische Produkte']
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
