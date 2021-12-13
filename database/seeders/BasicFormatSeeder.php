<?php

namespace Database\Seeders;

use App\Models\BasicFormat;
use Illuminate\Database\Seeder;

class BasicFormatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $basicFormats = BasicFormat::factory(10)->create();
    }
}
