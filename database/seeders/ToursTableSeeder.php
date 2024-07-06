<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tours = [
            [
                'tour_name' => 'جولة سياحية في الرياض',
                'tour_banner' => 'riyadh_tour_banner.jpg',
                'tour_type' => 1, // Group tour
                'tour_cost' => 500.00,
                'total_cost' => 500.00,
                'tour_date' => '2024-08-15',
                'adults_count' => 2,
                'children_count' => 1,
                'overview' => 'This is an overview of the tour in Riyadh.',
                'ar_overview' => 'هذه نظرة عامة عن الجولة في الرياض.',
                'banner' => 'riyadh_banner.jpg',
                'city_id' => 1, // Replace with the actual city_id from your cities table
            ],
            [
                'tour_name' => 'رحلة خاصة إلى دبي',
                'tour_banner' => 'dubai_tour_banner.jpg',
                'tour_type' => 0, // Private tour
                'tour_cost' => 1000.00,
                'total_cost' => 1000.00,
                'tour_date' => '2024-09-20',
                'adults_count' => 1,
                'children_count' => 0,
                'overview' => 'This is an overview of the private tour in Dubai.',
                'ar_overview' => 'هذه نظرة عامة عن الرحلة الخاصة في دبي.',
                'banner' => 'dubai_banner.jpg',
                'city_id' => 4, // Replace with the actual city_id from your cities table
            ],
            // Add more tour entries as needed
        ];

        foreach ($tours as $tour) {
            DB::table('tours')->insert([
                'tour_name' => $tour['tour_name'],
                'tour_banner' => $tour['tour_banner'],
                'tour_type' => $tour['tour_type'],
                'tour_cost' => $tour['tour_cost'],
                'total_cost' => $tour['total_cost'],
                'tour_date' => $tour['tour_date'],
                'adults_count' => $tour['adults_count'],
                'children_count' => $tour['children_count'],
                'overview' => $tour['overview'],
                'ar_overview' => $tour['ar_overview'],
                'banner' => $tour['banner'],
                'city_id' => $tour['city_id'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
