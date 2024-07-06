<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            'address' => '123 شارع المثال، المدينة، البلد',
            'phone' => '0123456789',
            'phone2' => '0987654321',
            'phone3' => '01122334455',
            'fax' => '01234567',
            'email' => 'info@example.com',
            'google_map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3601.2251299907486!2d..."></iframe>',
            'facebook' => 'https://www.facebook.com/example',
            'youtube' => 'https://www.youtube.com/example',
            'instagram' => 'https://www.instagram.com/example',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
