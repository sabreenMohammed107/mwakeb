<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sliders = [
            [
                'title' => 'مرحبا بكم في مواكب',
                'sub_title' => 'اكتشف رحلاتنا السياحية المميزة',
                'description' => 'تقدم مواكب رحلات سياحية استثنائية لأفضل الوجهات في العالم.',
                'image' => 'mawakib_slider_1.jpg',
            ],
            [
                'title' => 'خصومات مميزة',
                'sub_title' => 'لا تفوت الفرصة للحجز بخصم 30%',
                'description' => 'احجز رحلتك الآن واستمتع بخصم 30% على جميع الرحلات السياحية.',
                'image' => 'discount_slider.jpg',
            ],
            // Add more sliders as needed
        ];

        foreach ($sliders as $slider) {
            DB::table('home_sliders')->insert([
                'title' => $slider['title'],
                'sub_title' => $slider['sub_title'],
                'description' => $slider['description'],
                'image' => $slider['image'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
