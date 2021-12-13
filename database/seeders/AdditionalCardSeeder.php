<?php

namespace Database\Seeders;

use App\Models\AdditionalCard;
use Illuminate\Database\Seeder;

class AdditionalCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $additionalCards = AdditionalCard::factory(50)->create();
    }
}
