<?php

namespace Database\Seeders;

use App\Models\BasicCard;
use App\Models\BasicFormat;
use App\Models\BasicSection;
use Illuminate\Database\Seeder;

class BasicCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $basicCards = BasicCard::factory(50)->create();
    }
}
