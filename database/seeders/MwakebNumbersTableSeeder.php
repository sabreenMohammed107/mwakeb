<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MwakebNumbersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $numbers = [
            [
                'icon' => 'icon1.png',
                'title' => 'العملاء السعداء',
                'text' => 'أكثر من 1000 عميل سعيد مع خدماتنا حتى الآن.',
            ],
            [
                'icon' => 'icon2.png',
                'title' => 'الرحلات السنوية',
                'text' => 'ننظم أكثر من 500 رحلة سياحية سنويًا إلى أهم الوجهات السياحية.',
            ],
            [
                'icon' => 'icon3.png',
                'title' => 'الدول المغطاة',
                'text' => 'نعمل في أكثر من 20 دولة حول العالم لتلبية احتياجات عملائنا.',
            ],
            [
                'icon' => 'icon4.png',
                'title' => 'الدول المغطاة',
                'text' => 'نعمل في أكثر من 20 دولة حول العالم لتلبية احتياجات عملائنا.',
            ],
            // Add more items as needed
        ];

        foreach ($numbers as $number) {
            DB::table('mwakeb_numbers')->insert([
                'icon' => $number['icon'],
                'title' => $number['title'],
                'text' => $number['text'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
