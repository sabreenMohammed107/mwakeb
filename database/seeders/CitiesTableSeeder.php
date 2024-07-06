<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            // Saudi Arabia
            ['name' => 'الرياض', 'country_id' => 1],
            ['name' => 'جدة', 'country_id' => 1],
            ['name' => 'الدمام', 'country_id' => 1],

            // UAE
            ['name' => 'دبي', 'country_id' => 2],
            ['name' => 'أبو ظبي', 'country_id' => 2],
            ['name' => 'الشارقة', 'country_id' => 2],

            // Kuwait
            ['name' => 'الكويت', 'country_id' => 3],

            // Qatar
            ['name' => 'الدوحة', 'country_id' => 4],

            // Bahrain
            ['name' => 'المنامة', 'country_id' => 5],

            // Oman
            ['name' => 'مسقط', 'country_id' => 6],

            // Egypt
            ['name' => 'القاهرة', 'country_id' => 7],
            ['name' => 'الإسكندرية', 'country_id' => 7],

            // Jordan
            ['name' => 'عمان', 'country_id' => 8],

            // Lebanon
            ['name' => 'بيروت', 'country_id' => 9],

            // Syria
            ['name' => 'دمشق', 'country_id' => 10],

            // Iraq
            ['name' => 'بغداد', 'country_id' => 11],

            // Yemen
            ['name' => 'صنعاء', 'country_id' => 12],

            // Libya
            ['name' => 'طرابلس', 'country_id' => 13],

            // Tunisia
            ['name' => 'تونس', 'country_id' => 14],

            // Algeria
            ['name' => 'الجزائر', 'country_id' => 15],

            // Morocco
            ['name' => 'الدار البيضاء', 'country_id' => 16],
            ['name' => 'الرباط', 'country_id' => 16],

            // Sudan
            ['name' => 'الخرطوم', 'country_id' => 17],

            // Mauritania
            ['name' => 'نواكشوط', 'country_id' => 18],

            // Palestine
            ['name' => 'القدس', 'country_id' => 19],
        ];

        foreach ($cities as $city) {
            DB::table('cities')->insert([
                'name' => $city['name'],
                'country_id' => $city['country_id'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
