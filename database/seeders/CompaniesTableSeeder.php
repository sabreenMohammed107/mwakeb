<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('companies')->insert([
            'home_title' => 'مرحبا بكم في مواكب',
            'home_description' => 'أفضل خدمات السياحة والسفر',
            'home_image' => 'mawakib_home_image.jpg',
            'footer_description' => 'مواكب - وجهتك السياحية المفضلة',
            'why_choose_title' => 'لماذا تختار مواكب',
            'why_choose_description' => 'نحن نقدم أفضل الخدمات السياحية مع خبرة واسعة وأسعار تنافسية.',
            'overview_title' => 'نظرة عامة',
            'overview_description' => 'شركة مواكب تقدم مجموعة متنوعة من الخدمات السياحية تشمل الرحلات، والإقامة، والنقل، والتجارب الثقافية.',
            'mission_title' => 'مهمتنا',
            'mission_description' => 'تقديم أفضل الخدمات السياحية لعملائنا وتحقيق أعلى مستويات الرضا.',
            'vision_title' => 'رؤيتنا',
            'vision_description' => 'أن نكون الرواد في صناعة السياحة في المنطقة، مع التركيز على الجودة والابتكار.',
        ]);
    }
}
