<?php

namespace Database\Seeders;

use App\Models\AdditionalFile;
use Illuminate\Database\Seeder;

class AdditionalFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $additionalFiles = AdditionalFile::factory(100)->create();
    }
}
