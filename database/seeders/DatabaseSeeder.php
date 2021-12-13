<?php

namespace Database\Seeders;

use App\Models\BasicCard;
use App\Models\BasicFormat;
use App\Models\BasicSection;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            BasicSectionSeeder::class,
            BasicFormatSeeder::class,
            BasicCardSeeder::class,
            AdditionalMarkSeeder::class,
            AdditionalCardSeeder::class,
        ]);
    }
}
