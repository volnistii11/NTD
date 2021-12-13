<?php

namespace Database\Seeders;

use App\Models\BasicSection;
use Illuminate\Database\Seeder;

class BasicSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $basicSections = BasicSection::factory(3)->create();
    }
}
