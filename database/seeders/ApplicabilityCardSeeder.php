<?php

namespace Database\Seeders;

use App\Models\ApplicabilityCard;
use Database\Factories\ApplicabilityCardFactory;
use Illuminate\Database\Seeder;

class ApplicabilityCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $applicabilityCards = ApplicabilityCard::factory(100)->create();
    }
}
