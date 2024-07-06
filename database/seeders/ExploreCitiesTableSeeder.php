<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExploreCitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Example data for explore_cities
        $exploreCities = [
            [
                'city_id' => 1, // Replace with the actual city_id from your cities table
                'title' => 'استكشاف الرياض',
                'sub_title' => 'الأماكن السياحية في الرياض',
                'image' => 'riyadh.jpg',
            ],
            [
                'city_id' => 4, // Replace with the actual city_id from your cities table
                'title' => 'استكشاف دبي',
                'sub_title' => 'الأماكن السياحية في دبي',
                'image' => 'dubai.jpg',
            ],
            // Add more entries as needed
        ];

        foreach ($exploreCities as $exploreCity) {
            DB::table('explore_cities')->insert([
                'city_id' => $exploreCity['city_id'],
                'title' => $exploreCity['title'],
                'sub_title' => $exploreCity['sub_title'],
                'image' => $exploreCity['image'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
