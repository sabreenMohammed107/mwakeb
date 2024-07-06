<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            'المملكة العربية السعودية',
            'الإمارات العربية المتحدة',
            'الكويت',
            'قطر',
            'البحرين',
            'عمان',
            'مصر',
            'الأردن',
            'لبنان',
            'سوريا',
            'العراق',
            'اليمن',
            'ليبيا',
            'تونس',
            'الجزائر',
            'المغرب',
            'السودان',
            'موريتانيا',
            'فلسطين'
        ];

        foreach ($countries as $country) {
            DB::table('countries')->insert([
                'name' => $country,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
