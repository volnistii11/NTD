<?php

namespace Database\Seeders;

use App\Models\AdditionalMark;
use Illuminate\Database\Seeder;

class AdditionalMarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $additionalMarks = AdditionalMark::factory(4)->create();
    }
}
