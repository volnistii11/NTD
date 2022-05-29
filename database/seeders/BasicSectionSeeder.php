<?php

namespace Database\Seeders;

use App\Models\BasicSection;
use Illuminate\Database\Eloquent\Factories\Sequence;
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
        // INEUM - 1
        // MCST - 2
        // other -3

        $basicSections = BasicSection::factory(46)
            ->state(new Sequence(
                ['name' => 'ИНЭУМ - КД', 'section_number' => 1],
                ['name' => 'ИНЭУМ - ПД', 'section_number' => 1],
                ['name' => 'ИНЭУМ - ТД', 'section_number' => 1],
                ['name' => 'ИНЭУМ - документация СМ ЭВМ', 'section_number' => 1],
                ['name' => 'ИНЭУМ - картотека архива СТО', 'section_number' => 1],

                ['name' => 'ИНЭУМ(э.в.) - КД', 'section_number' => 1],
                ['name' => 'ИНЭУМ(э.в.) - ПД', 'section_number' => 1],
                ['name' => 'ИНЭУМ(э.в.) - ТД', 'section_number' => 1],
                ['name' => 'ИНЭУМ(э.в.) - документация СМ ЭВМ', 'section_number' => 1],
                ['name' => 'ИНЭУМ(э.в.) - картотека архива СТО', 'section_number' => 1],

                ['name' => 'ИНЭУМ КТ - КД', 'section_number' => 2],
                ['name' => 'ИНЭУМ КТ - ПД', 'section_number' => 2],
                ['name' => 'ИНЭУМ КТ - ТД', 'section_number' => 2],

                ['name' => 'ИНЭУМ КТ(э.в.)  - КД', 'section_number' => 2],
                ['name' => 'ИНЭУМ КТ(э.в.)  - ПД', 'section_number' => 2],
                ['name' => 'ИНЭУМ КТ(э.в.)  - ТД', 'section_number' => 2],

                ['name' => 'ИНЭУМ ВП - КД', 'section_number' => 3],
                ['name' => 'ИНЭУМ ВП - ПД', 'section_number' => 3],
                ['name' => 'ИНЭУМ ВП - ТД', 'section_number' => 3],

                ['name' => 'ИНЭУМ ВП(э.в.) - КД', 'section_number' => 3],
                ['name' => 'ИНЭУМ ВП(э.в.) - ПД', 'section_number' => 3],
                ['name' => 'ИНЭУМ ВП(э.в.) - ТД', 'section_number' => 3],


                ['name' => 'МЦСТ - КД', 'section_number' => 4],
                ['name' => 'МЦСТ - ПД', 'section_number' => 4],
                ['name' => 'МЦСТ - ТД', 'section_number' => 4],

                ['name' => 'МЦСТ(э.в.) - КД', 'section_number' => 4],
                ['name' => 'МЦСТ(э.в.) - ПД', 'section_number' => 4],
                ['name' => 'МЦСТ(э.в.) - ТД', 'section_number' => 4],

                ['name' => 'МЦСТ ВП - КД', 'section_number' => 5],
                ['name' => 'МЦСТ ВП - ПД', 'section_number' => 5],
                ['name' => 'МЦСТ ВП - ТД', 'section_number' => 5],

                ['name' => 'МЦСТ ВП(э.в.) - КД', 'section_number' => 5],
                ['name' => 'МЦСТ ВП(э.в.) - ПД', 'section_number' => 5],
                ['name' => 'МЦСТ ВП(э.в.) - ТД', 'section_number' => 5],


                ['name' => 'Ст.орг - КД', 'section_number' => 6],
                ['name' => 'Ст.орг - ПД', 'section_number' => 6],
                ['name' => 'Ст.орг - ТД', 'section_number' => 6],

                ['name' => 'Ст.орг(э.в.) - КД', 'section_number' => 6],
                ['name' => 'Ст.орг(э.в.) - ПД', 'section_number' => 6],
                ['name' => 'Ст.орг(э.в.) - ТД', 'section_number' => 6],

                ['name' => 'Ст.орг ВП - КД', 'section_number' => 7],
                ['name' => 'Ст.орг ВП - ПД', 'section_number' => 7],
                ['name' => 'Ст.орг ВП - ТД', 'section_number' => 7],

                ['name' => 'Ст.орг ВП(э.в.) - КД', 'section_number' => 7],
                ['name' => 'Ст.орг ВП(э.в.) - ПД', 'section_number' => 7],
                ['name' => 'Ст.орг ВП(э.в.) - ТД', 'section_number' => 7],
            ))
            ->create();
    }
}
