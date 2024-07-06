<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CountriesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(ExploreCitiesTableSeeder::class);
        $this->call(ToursTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
        $this->call(HomeSlidersTableSeeder::class);
        $this->call(WhyUsTableSeeder::class);
        $this->call(MwakebNumbersTableSeeder::class);
    }
}
