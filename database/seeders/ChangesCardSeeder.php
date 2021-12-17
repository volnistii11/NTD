<?php

namespace Database\Seeders;

use App\Models\ChangesCard;
use Illuminate\Database\Seeder;

class ChangesCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $changesCards = ChangesCard::factory(100)->create();
    }
}
