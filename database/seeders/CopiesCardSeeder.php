<?php

namespace Database\Seeders;


use App\Models\CopiesCard;
use Illuminate\Database\Seeder;

class CopiesCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $copiesCards = CopiesCard::factory(100)->create();
    }
}
