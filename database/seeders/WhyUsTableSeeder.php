<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WhyUsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $whyUsItems = [
            [
                'icon' => 'icon1.png',
                'title' => 'أفضل الخدمات',
                'text' => 'نقدم أفضل الخدمات لعملائنا ونسعى دائمًا لتحقيق رضاهم التام.',
            ],
            [
                'icon' => 'icon2.png',
                'title' => 'خبرة واسعة',
                'text' => 'لدينا فريق متخصص بخبرة واسعة في مجال السياحة والسفر.',
            ],
            [
                'icon' => 'icon3.png',
                'title' => 'أسعار منافسة',
                'text' => 'نحن نقدم أسعارًا تنافسية تناسب جميع ميزانيات العملاء.',
            ],
            // Add more items as needed
        ];

        foreach ($whyUsItems as $item) {
            DB::table('why_us')->insert([
                'icon' => $item['icon'],
                'title' => $item['title'],
                'text' => $item['text'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
